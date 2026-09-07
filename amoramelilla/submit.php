<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { exit; }

// ── Cargar .env ──────────────────────────────────────────────────────────────
function loadEnv($path) {
    if (!file_exists($path)) return;
    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        [$name, $value] = explode('=', $line, 2);
        $name  = trim($name);
        $value = trim($value);
        putenv("$name=$value");
        $_ENV[$name] = $value;
    }
}
loadEnv(__DIR__ . '/.env');

// ── Helpers ──────────────────────────────────────────────────────────────────
function getPost($k) { return isset($_POST[$k]) ? trim($_POST[$k]) : ''; }
function getArray($k) { return isset($_POST[$k]) ? implode(', ', $_POST[$k]) : ''; }

// ── Anti-bot: honeypot ───────────────────────────────────────────────────────
if (!empty($_POST['website_hp'])) { header('Location: index.php?error=bot'); exit; }

// ── Anti-bot: tiempo mínimo ──────────────────────────────────────────────────
if (!isset($_SESSION['form_time'])) { header('Location: index.php'); exit; }
if (time() - $_SESSION['form_time'] < 3) { header('Location: index.php?error=rapido'); exit; }
unset($_SESSION['form_time']);

// ── reCAPTCHA ────────────────────────────────────────────────────────────────
$recaptchaSecret = getenv('RECAPTCHA_SECRET_KEY');
$recaptchaToken  = $_POST['g-recaptcha-response'] ?? '';
if (empty($recaptchaToken)) { header('Location: index.php?error=captcha'); exit; }

$verify = curl_init();
curl_setopt_array($verify, [
    CURLOPT_URL            => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query([
        'secret'   => $recaptchaSecret,
        'response' => $recaptchaToken,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ])
]);
$verifyResponse = json_decode(curl_exec($verify), true);
curl_close($verify);
if (empty($verifyResponse['success'])) { header('Location: index.php?error=captcha'); exit; }

// ── Config ───────────────────────────────────────────────────────────────────
$apiKey = getenv('BREVO_API_KEY');
$listId = (int) getenv('BREVO_LIST_ID');

// ── Datos del formulario ─────────────────────────────────────────────────────
$nombre   = getPost('nombre_completo');
$email    = getPost('email');
$telefono = getPost('telefono');

$camposBrevo = [
    'SOURCE'                => 'amora_2026',
    'MODALIDAD'             => getPost('modalidad'),
    'NOMBRE_COMPLETO'       => $nombre,
    'NOMBRE_GRUPO'          => getPost('nombre_grupo'),
    'TELEFONO'              => $telefono,
    'CONTACTO_PREFERIDO'    => getPost('contacto_preferido'),
    'CIUDAD'                => getPost('ciudad'),
    'LOCALIDAD'             => getPost('localidad'),
    'DOMICILIO'             => getPost('domicilio'),
    'NUM_PERSONAS'          => getPost('num_personas'),
    'QUIENES_PARTICIPAN'    => getPost('quienes_participan'),
    'ANOS_ACTIVIDAD'        => getPost('anos_actividad'),
    'TECNICAS'              => getPost('tecnicas'),
    'TIPOS_PRODUCTOS'       => getPost('tipos_productos'),
    'LUGAR_ELABORACION'     => getArray('lugar_elaboracion'),
    'PROCESO_ELABORACION'   => getPost('proceso_elaboracion'),
    'PARTES_MANO'           => getPost('partes_mano'),
    'HERRAMIENTAS'          => getPost('herramientas'),
    'RELACION_COMUNIDAD'    => getPost('relacion_comunidad'),
    'MATERIALES'            => getPost('materiales'),
    'ORIGEN_MATERIALES'     => getPost('origen_materiales'),
    'TIPO_MATERIALES'       => getArray('tipo_materiales'),
    'ESPECIES_SILVESTRES'   => getPost('especies_silvestres'),
    'SUSTANCIAS_ESPECIALES' => getPost('sustancias_especiales'),
    'PLASTICO_USO_UNICO'    => getPost('plastico_uso_unico'),
    'CATALOGO'              => getPost('catalogo'),
    'ENLACE_CATALOGO'       => getPost('enlace_catalogo'),
    'RANGO_PRECIOS'         => getPost('rango_precios'),
    'CAPACIDAD_MENSUAL'     => getPost('capacidad_mensual'),
    'TIEMPO_PEDIDO'         => getPost('tiempo_pedido'),
    'PRODUCCION_ESTACIONAL' => getPost('produccion_estacional'),
    'ESTACIONAL_CUANDO'     => getPost('estacional_cuando'),
    'EMPAQUE'               => getPost('empaque'),
    'CALCULO_PRECIOS'       => getPost('calculo_precios'),
    'LIMITACIONES'          => getPost('limitaciones_produccion'),
    'CANALES_VENTA'         => getArray('canales_venta'),
    'FACTURA'               => getPost('factura'),
    'FORTALECIMIENTO'       => getArray('fortalecimiento'),
    'FIRMA_NOMBRE'          => getPost('firma_nombre'),
    'FECHA_FIRMA'           => getPost('fecha_firma'),
];

// ── BREVO ─────────────────────────────────────────────────────────────────────
$dataBrevo = [
    'email'         => $email,
    'attributes'    => $camposBrevo,
    'listIds'       => [$listId],
    'updateEnabled' => true
];
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => 'https://api.brevo.com/v3/contacts',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        'accept: application/json',
        'content-type: application/json',
        "api-key: $apiKey"
    ],
    CURLOPT_POSTFIELDS => json_encode($dataBrevo)
]);
$brevoResp = curl_exec($ch);
if (curl_errno($ch)) error_log('Brevo CURL ERROR: ' . curl_error($ch));
curl_close($ch);

// ── GOOGLE SHEETS ─────────────────────────────────────────────────────────────
$webhook = 'https://script.google.com/macros/s/AKfycbzQdCAPOMu-dYFhrIeV_oJlmKKe7skovVJ4P-G_4o09PzxBsCtgilv5Or45uATESWoz/exec';
$payload = array_merge(['EMAIL' => $email], $camposBrevo);
$ch = curl_init($webhook);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($payload),
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true
]);
$sheetResp = curl_exec($ch);
if (curl_errno($ch)) error_log('Sheets CURL ERROR: ' . curl_error($ch));
curl_close($ch);

// ── ARCHIVO PDF ───────────────────────────────────────────────────────────────
$pdfPath    = null;
$pdfAttached = false;

if (!empty($_FILES['catalogo_pdf']['name']) && $_FILES['catalogo_pdf']['error'] === UPLOAD_ERR_OK) {
    $file    = $_FILES['catalogo_pdf'];
    $maxSize = 8 * 1024 * 1024; // 8 MB
    $finfo   = new finfo(FILEINFO_MIME_TYPE);
    $mime    = $finfo->file($file['tmp_name']);

    if ($file['size'] <= $maxSize && $mime === 'application/pdf') {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

        $safeName = 'catalogo_' . time() . '_' . preg_replace('/[^a-z0-9._-]/i', '_', $file['name']);
        $pdfPath  = $uploadDir . $safeName;

        if (move_uploaded_file($file['tmp_name'], $pdfPath)) {
            $pdfAttached = true;
        }
    }
}

// ── EMAIL CON PHPMAILER ───────────────────────────────────────────────────────
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {
    // SMTP
    $mail->isSMTP();
    $mail->Host       = getenv('SMTP_HOST');
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('SMTP_USER');
    $mail->Password   = getenv('SMTP_PASS');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int) getenv('SMTP_PORT');
    $mail->CharSet    = 'UTF-8';

    // Remitente / destinatario
    $mail->setFrom(getenv('MAIL_FROM'), getenv('MAIL_FROM_NAME'));
    $mail->addAddress(getenv('MAIL_TO'));
    $mail->addReplyTo($email, $nombre);

    // Adjunto PDF
    if ($pdfAttached && $pdfPath) {
        $mail->addAttachment($pdfPath, 'Catalogo_' . preg_replace('/[^a-z0-9]/i', '_', $nombre) . '.pdf');
    }

    // Asunto
    $mail->Subject = 'Nuevo registro AMORA — ' . $nombre;

    // Cuerpo HTML
    $filas = '';
    foreach ($camposBrevo as $k => $v) {
        if (empty($v)) continue;
        $filas .= "<tr>
            <td style='padding:6px 12px;font-weight:600;color:#555;background:#f8f4fc;white-space:nowrap'>" . htmlspecialchars($k) . "</td>
            <td style='padding:6px 12px;color:#333'>" . nl2br(htmlspecialchars($v)) . "</td>
        </tr>";
    }

    $mail->isHTML(true);
    $mail->Body = "
    <!DOCTYPE html>
    <html lang='es'>
    <head><meta charset='UTF-8'></head>
    <body style='font-family:Arial,sans-serif;background:#f4f4f8;margin:0;padding:20px'>
        <div style='max-width:680px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.1)'>
            <div style='background:linear-gradient(135deg,#b98fd4,#7c4daf);padding:28px 32px'>
                <h1 style='color:#fff;margin:0;font-size:22px'>Nuevo registro AMORA</h1>
                <p style='color:#e8d6f7;margin:4px 0 0'>Persona proveedora artesana</p>
            </div>
            <div style='padding:28px 32px'>
                <p style='color:#444;font-size:15px'>Se ha recibido un nuevo registro con los siguientes datos:</p>
                <table style='width:100%;border-collapse:collapse;margin-top:16px;font-size:14px'>
                    <tr>
                        <td style='padding:6px 12px;font-weight:600;color:#555;background:#f0e6f8'>CORREO</td>
                        <td style='padding:6px 12px;color:#333'>" . htmlspecialchars($email) . "</td>
                    </tr>
                    $filas
                </table>
                " . ($pdfAttached ? "<p style='margin-top:20px;color:#7c4daf;font-size:13px'>📎 Se adjunta el catálogo en PDF.</p>" : "") . "
            </div>
            <div style='background:#f8f4fc;padding:16px 32px;text-align:center'>
                <p style='color:#aaa;font-size:12px;margin:0'>AMORA · Registro automático · " . date('d/m/Y H:i') . "</p>
            </div>
        </div>
    </body>
    </html>";

    $mail->AltBody = "Nuevo registro AMORA\nNombre: $nombre\nEmail: $email\nTeléfono: $telefono";

    $mail->send();

} catch (Exception $e) {
    error_log('PHPMailer Error: ' . $mail->ErrorInfo);
}

// Limpia el archivo temporal tras enviar
if ($pdfPath && file_exists($pdfPath)) {
    @unlink($pdfPath);
}

// ── Redirect ──────────────────────────────────────────────────────────────────
header('Location: gracias.php');
exit;
?>
