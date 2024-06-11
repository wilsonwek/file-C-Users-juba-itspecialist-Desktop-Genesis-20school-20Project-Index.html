<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'],
$subject= $_POST['subject'],
$message = $_POST['message'],

$email_form ='wekwol92@gmail.com';

$email_subject ='New form Submission';

$email_body ="User name: $name .\n ".
              "User Email:$visitor_email .\n".
              "Subject :$subject.\n".
              "user message:$message .\n";



$to ='wilsonwek12@gmail.com';



$headers ="from: $email_form \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location:contact.html");

?>