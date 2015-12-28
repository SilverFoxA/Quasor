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

server {
    listen       80;
    server_name  localhost;

    location / {
        root   html;
        index  index.html index.htm;
    }

    error_page  404     /404.html;
    error_page  403     /403.html;

    # To allow POST on static pages
    error_page  405     =200 $uri;

    # ...
}

mail($to, $subject, $message, $headers);

die;