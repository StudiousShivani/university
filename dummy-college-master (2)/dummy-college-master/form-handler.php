<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject='New Form Submission';

$email_body = "User Name: $name. \n".
                "User Email: $visitor_email . \n".
                "Subject: $Subject . \n".
                "User Message: $message . \n";

$to = ' nishaa.1803gera@gmail.com';

$headers = "from : $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);

header("location:contact.html");




?>