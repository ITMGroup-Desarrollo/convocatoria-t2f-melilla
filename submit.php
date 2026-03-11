<?php

// ======================
// CONFIG
// ======================


$listId = 37; // ID de la lista Landing Melilla

// ======================
// FUNCIONES
// ======================

function getPost($name){
    return isset($_POST[$name]) ? trim($_POST[$name]) : "";
}

function getArray($name){
    return isset($_POST[$name]) ? implode(", ", $_POST[$name]) : "";
}

// ======================
// DATOS DEL FORMULARIO
// ======================

$email = getPost("email");

$data = [

"email" => $email,

"attributes" => [
"SOURCE" => "landing_melilla_2026",
"ENTITY" => getPost("entity"),
"COMPANY" => getPost("company"),
"CONTACT_NAME" => getPost("contact_name"),
"TAX_ID" => getPost("tax_id"),
"ADDRESS" => getPost("address"),
"WEBSITE" => getPost("website"),
"PHONE" => getPost("phone"),
"SOCIAL" => getPost("social"),
"YEARS_EXP" => getPost("years_exp"),
"MELILLA_EXP" => getPost("melilla"),
"MELILLA_DETAILS" => getPost("melilla_details"),
"GUIDES" => getPost("guides"),
"TOUR_CATEGORIES" => getArray("tour_categories"),
"TOUR_CAPACITY" => getArray("tour_capacity"),
"COMPANY_SUMMARY" => getPost("company_summary"),
"BRING_GUIDES" => getPost("bring_guides"),
"PRICE_RANGE" => getPost("price_range")

],

"listIds" => [$listId],

"updateEnabled" => true

];

// ======================
// REQUEST BREVO
// ======================

$ch = curl_init();

curl_setopt_array($ch, [
CURLOPT_URL => "https://api.brevo.com/v3/contacts",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_HTTPHEADER => [
"accept: application/json",
"content-type: application/json",
"api-key: $apiKey"
],
CURLOPT_POSTFIELDS => json_encode($data)
]);

$response = curl_exec($ch);

if(curl_errno($ch)){
    echo "Error CURL: " . curl_error($ch);
    exit;
}

curl_close($ch);

// ======================
// Google Sheets
// ======================

$webhook = "https://script.google.com/macros/s/AKfycbxrdjSEaldZ-za1FjQSN_RbMAb4cxmf7FlJ9Spvyp6s56QP6lX_Mzu4R589z4Xc4bjH/exec";

$payload = [

"SOURCE" => "landing_melilla_2026",
"ENTITY" => getPost("entity"),
"COMPANY" => getPost("company"),
"CONTACT_NAME" => getPost("contact_name"),
"EMAIL" => getPost("email"),
"TAX_ID" => getPost("tax_id"),
"ADDRESS" => getPost("address"),
"WEBSITE" => getPost("website"),
"PHONE" => getPost("phone"),
"SOCIAL" => getPost("social"),
"YEARS_EXP" => getPost("years_exp"),
"MELILLA_EXP" => getPost("melilla"),
"MELILLA_DETAILS" => getPost("melilla_details"),
"GUIDES" => getPost("guides"),
"TOUR_CATEGORIES" => getArray("tour_categories"),
"TOUR_CAPACITY" => getArray("tour_capacity"),
"COMPANY_SUMMARY" => getPost("company_summary"),
"BRING_GUIDES" => getPost("bring_guides"),
"PRICE_RANGE" => getPost("price_range")



];

$ch = curl_init($webhook);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_exec($ch);
curl_close($ch);

// ======================
// REDIRECT
// ======================

header("Location: gracias.php");
exit;
?>