<?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = 'mayank@quasor.in'
$subject    = 'Enquiry'; 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'abhijit2294@gmail.com';

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;