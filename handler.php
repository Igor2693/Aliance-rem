<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);


$token = "7213367169:AAEkKxmGSjjgE6Gf3swGm9Xios7cohw52YU";
$chat_id = "-4214926859";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value) {
  $text .= $key . $value;
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}



