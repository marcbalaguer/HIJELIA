<?php

$headers = 'From:' .$_POST['email']. "\r\n" .
    'Reply-To:'.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$to      = 'contact@hijelia.com';
$subject = "HIJELIA - ".$_POST['subject'];
$message = 'Bonjour,'."<br/>".$_POST['fname']." ".$_POST['lname']."vous demande les informations suivantes : "."<br/>".$_POST['message'];
//var_dump(mail($to, $subject, $message, $headers));
?> 