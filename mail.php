<?php
    
    $too = "info@yodhaa.com"; // my address
    $subject = "testing mail function"; // subject
    $message = "hello,world"; // message
    $user_email = "ethender.talamarla@yodhaa.com"; //users email address
    
    
    $headers = "From: $user_email\r\n";
    $headers .= "Reply-To: $too\r\n";
    $headers .= "Return-Path: $too\r\n";
    $headers .= "X-Mailer: PHP/".phpversion()."\r\n";
    $headers .= 'MIME-Version: 1.0'."\n";
    $headers .= 'content-type: text/html; UTF-8'."\r\n";
    
    if(mail($too,$subject,$message,$headers))echo 'SENT';
?>