<?php 
$user_name = htmlspecialchars($_POST["user_name"]);
$user_phone = htmlspecialchars($_POST["user_phone"]);
$token = "7198932165:AAE0YtbomIlUZFpHvtZkF0R7ZbaIyQmoMp0";
$chat_id = "-4141422974";
$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone
);
foreach($formData as $key => $value) {
    $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");



