<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/');

$result = curl_exec($ch);

echo $result;
?>

