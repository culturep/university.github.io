<?
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['message'];

$email_from = 'masikoshongwe18@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $massage.\n";

  $to = 'masikoshongwe18@gmail.com';
  
  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";


  mail($to,$email_subject,$email_body,$headers);

  header("location: contact.html");






?>