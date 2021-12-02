<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emailfrom = 'alimnuaa@gamil.com'

$email_subject='Questions'

$email_body = "User Name : $name.\n".
               "User Email : $email.\n".
               "User Subject : $subject.\n".
                "User Message : $message.\n";

              
                
  $to ='salimnuaa@gmail.com';
  
  $headers = "From: $emailfrom \r\n";
  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: contact.html");






?>