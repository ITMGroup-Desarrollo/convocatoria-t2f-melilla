<?php
function loadEnv($path) {
    if (!file_exists($path)) { echo "ERROR: .env no encontrado\n"; return; }
    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        if (strpos($line, '=') === false) continue;
        [$name, $value] = explode('=', $line, 2);
        putenv(trim($name) . '=' . trim($value));
        $_ENV[trim($name)] = trim($value);
    }
}
loadEnv(__DIR__ . '/.env');

require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nombre   = 'Maria Lopez Artesana';
$email    = 'maria.lopez@ejemplo.com';
$telefono = '+52 55 1234 5678';

$campos = [
    'SOURCE' => 'amora_2026',
    'MODALIDAD' => 'Artesania textil',
    'NOMBRE_COMPLETO' => $nombre,
    'NOMBRE_GRUPO' => 'Taller Hilos de Luz',
    'TELEFONO' => $telefono,
    'CONTACTO_PREFERIDO' => 'WhatsApp',
    'CIUDAD' => 'Ciudad de Mexico',
    'LOCALIDAD' => 'Coyoacan',
    'DOMICILIO' => 'Calle Artesanos 42, Col. Del Carmen',
    'NUM_PERSONAS' => '3',
    'TECNICAS' => 'Tejido en telar, bordado a mano',
    'TIPOS_PRODUCTOS' => 'Bolsos, manteles, tapetes',
    'PROCESO_ELABORACION' => 'Proceso completamente manual usando telares de madera.',
    'PARTES_MANO' => '100%',
    'RANGO_PRECIOS' => '$150 - $2,500 MXN',
    'CAPACIDAD_MENSUAL' => '40 piezas',
    'CANALES_VENTA' => 'Mercados artesanales, redes sociales',
    'FACTURA' => 'Si, emitimos factura',
    'FIRMA_NOMBRE' => $nombre,
    'FECHA_FIRMA' => date('d/m/Y'),
];

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug  = 0;
    $mail->isSMTP();
    $mail->Host       = getenv('SMTP_HOST');
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('SMTP_USER');
    $mail->Password   = getenv('SMTP_PASS');
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int) getenv('SMTP_PORT');
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom(getenv('MAIL_FROM'), getenv('MAIL_FROM_NAME'));
    $mail->addAddress(getenv('MAIL_TO'));
    if (getenv('MAIL_TO2')) $mail->addAddress(getenv('MAIL_TO2'));
    $mail->addReplyTo($email, $nombre);

    $pdfAttached = false;

    $filas = '';
    foreach ($campos as $k => $v) {
        if (empty($v)) continue;
        $filas .= "<tr><td style='padding:6px 12px;font-weight:600;color:#555;background:#f8f4fc'>".htmlspecialchars($k)."</td><td style='padding:6px 12px;color:#333'>".htmlspecialchars($v)."</td></tr>";
    }

    $mail->Subject = '[PRUEBA] Nuevo registro AMORA - ' . $nombre;
    $mail->isHTML(true);
    $mail->Body = "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'></head><body style='font-family:Arial,sans-serif;background:#f4f4f8;margin:0;padding:20px'>
        <div style='max-width:680px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.1)'>
            <div style='background:linear-gradient(135deg,#b98fd4,#7c4daf);padding:28px 32px'>
                <h1 style='color:#fff;margin:0;font-size:22px'>PRUEBA - Nuevo registro AMORA</h1>
                <p style='color:#e8d6f7;margin:4px 0 0'>Persona proveedora artesana</p>
            </div>
            <div style='padding:28px 32px'>
                <p style='color:#e74c3c;font-weight:bold'>Este es un correo de prueba del sistema.</p>
                <table style='width:100%;border-collapse:collapse;margin-top:16px;font-size:14px'>
                    <tr><td style='padding:6px 12px;font-weight:600;color:#555;background:#f0e6f8'>CORREO</td><td style='padding:6px 12px;color:#333'>".htmlspecialchars($email)."</td></tr>
                    $filas
                </table>
                ".($pdfAttached ? "<p style='margin-top:20px;color:#7c4daf;font-size:13px'>Se adjunta el catalogo en PDF.</p>" : "")."
            </div>
            <div style='background:#f8f4fc;padding:16px 32px;text-align:center'>
                <p style='color:#aaa;font-size:12px;margin:0'>AMORA - Registro automatico - ".date('d/m/Y H:i')."</p>
            </div>
        </div></body></html>";
    $mail->AltBody = "PRUEBA - Registro AMORA\nNombre: $nombre\nEmail: $email\nTelefono: $telefono";

    $mail->send();
    echo "CORREO ENVIADO correctamente a: " . getenv('MAIL_TO') . " y " . getenv('MAIL_TO2') . "\n";
} catch (Exception $e) {
    echo "ERROR: " . $mail->ErrorInfo . "\n";
}
?>
