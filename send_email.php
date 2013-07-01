<?php

$to = 'eric61213@gmail.com'; 
$subject = 'Wakeup eric!'; 
$message = '<b>yo</b>, whassup?'; 
$headers = "From: server@example.com\r\n" . 
        'X-Mailer: PHP/' . phpversion() . "\r\n" . 
        "MIME-Version: 1.0\r\n" . 
        "Content-Type: text/html; charset=utf-8\r\n" . 
        "Content-Transfer-Encoding: 8bit\r\n\r\n"; 

// Send 
mail($to, $subject, $message, $headers);

?>