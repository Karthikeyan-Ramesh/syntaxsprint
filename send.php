<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'sbhar00n98@hotmail.com';
  $subject = 'From Syntax Sprint Web';
  $message = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
  echo 'Your message has been sent.';
}
?>
