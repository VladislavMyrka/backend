<?php
Subject = 'MY TEST EMAIL';

echo '=============' . "\n";
echo $Subject        . "\n";
echo '=============' . "\n";

$message = $text3 . $text4 . $text5 . $text6 . $text7;
$message = $text8;


echo $message;

mail(
    string $to,
string $subject,
string $message,
string $additional_headers

$headers = 'From: vladislav.mirka@gmail.com';
mail('foxLord243.gmail.com', $Subject, $message ,$headers);

?>