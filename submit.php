<?php
function loadEnv($path)
{
    if (!file_exists($path)) return;

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;

        list($name, $value) = explode('=', $line, 2);
        $name  = trim($name);
        $value = trim($value);

        putenv("$name=$value");
        $_ENV[$name] = $value;
    }
}

loadEnv(__DIR__ . '/.env');

// ======================
// CONFIG
// ======================
$apiKey = getenv('BREVO_API_KEY');
$listId = (int) getenv('BREVO_LIST_ID');

// ======================
// VERIFICAR reCAPTCHA
// ======================
$recaptchaSecret = getenv('RECAPTCHA_SECRET_KEY');
$recaptchaToken  = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

if (empty($recaptchaToken)) {
    header("Location: index.php?error=captcha");
    exit;
}

$verify = curl_init();
curl_setopt_array($verify, [
    CURLOPT_URL            => "https://www.google.com/recaptcha/api/siteverify",
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

if (empty($verifyResponse['success'])) {
    header("Location: index.php?error=captcha");
    exit;
}

// ======================
// FUNCIONES
// ======================
function getPost($name) {
    return isset($_POST[$name]) ? trim($_POST[$name]) : "";
}

function getArray($name) {
    return isset($_POST[$name]) ? implode(", ", $_POST[$name]) : "";
}

// ======================
// DATOS DEL FORMULARIO
// ======================
$email = getPost("email");

$data = [
    "email" => $email,
    "attributes" => [
        "SOURCE"          => "landing_melilla_2026",
        "ENTITY"          => getPost("entity"),
        "COMPANY"         => getPost("company"),
        "CONTACT_NAME"    => getPost("contact_name"),
        "ADDRESS"         => getPost("address"),
        "WEBSITE"         => getPost("website"),
        "PHONE"           => getPost("phone"),
        "SOCIAL"          => getPost("social"),
        "YEARS_EXP"       => getPost("years_exp"),
        "MELILLA_EXP"     => getPost("melilla"),
        "MELILLA_DETAILS" => getPost("melilla_details"),
        "GUIDES"          => getPost("guides"),
        "TOUR_CATEGORIES" => getArray("tour_categories"),
        "TOUR_CAPACITY"   => getPost("tour_capacity"),
        "COMPANY_SUMMARY" => getPost("company_summary"),
        "PRICE_RANGE"     => getPost("price_range"),
        "EXPERIENCE"      => getPost("experience")
    ],
    "listIds"       => [$listId],
    "updateEnabled" => true
];

// ======================
// REQUEST BREVO
// ======================
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => "https://api.brevo.com/v3/contacts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        "accept: application/json",
        "content-type: application/json",
        "api-key: $apiKey"
    ],
    CURLOPT_POSTFIELDS => json_encode($data)
]);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    error_log("Brevo CURL ERROR: " . curl_error($ch));
}
curl_close($ch);

// ======================
// GOOGLE SHEETS
// ======================
$webhook = "https://script.google.com/macros/s/AKfycbzQdCAPOMu-dYFhrIeV_oJlmKKe7skovVJ4P-G_4o09PzxBsCtgilv5Or45uATESWoz/exec";

$payload = [
    "SOURCE"          => "landing_melilla_2026",
    "ENTITY"          => getPost("entity"),
    "COMPANY"         => getPost("company"),
    "CONTACT_NAME"    => getPost("contact_name"),
    "EMAIL"           => getPost("email"),
    "ADDRESS"         => getPost("address"),
    "WEBSITE"         => getPost("website"),
    "PHONE"           => getPost("phone"),
    "SOCIAL"          => getPost("social"),
    "YEARS_EXP"       => getPost("years_exp"),
    "MELILLA_EXP"     => getPost("melilla"),
    "MELILLA_DETAILS" => getPost("melilla_details"),
    "GUIDES"          => getPost("guides"),
    "TOUR_CATEGORIES" => getArray("tour_categories"),
    "TOUR_CAPACITY"   => getPost("tour_capacity"),
    "COMPANY_SUMMARY" => getPost("company_summary"),
    "PRICE_RANGE"     => getPost("price_range"),
    "EXPERIENCE"      => getPost("experience")
];

$ch = curl_init($webhook);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($payload),
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true
]);

$sheetResponse = curl_exec($ch);
if (curl_errno($ch)) {
    error_log("Sheets CURL ERROR: " . curl_error($ch));
}
curl_close($ch);

// ======================
// REDIRECT
// ======================
header("Location: gracias.php");
exit;
?>