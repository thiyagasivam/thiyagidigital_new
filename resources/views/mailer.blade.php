<?php

if($_POST) {
  $to = "thiyagiinc@gmail.com"; // your mail here
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
  $subject = 'Thiyagidigital lead';
  $cc = 'thiyagiinc@gmail.com';
  $body = "Name:$name\nPhone:$phone\nEmail:$email\nMessage:$message";
  
  //mail headers are mandatory for sending email
  $headers = 'From: ' .$email . "\r\n". 
  $cc = 'Cc: ' .$cc . "\r\n". 
  $bcc = 'Bcc: ' .$bcc . "\r\n".
  'Reply-To: ' . $email. "\r\n" . 
  'X-Mailer: PHP/' . phpversion();

  if(@mail($to, $subject, $body)) {
    $output = json_encode(array('success' => true));
    echo "<script>window.location= 'thankyou'</script>";
  } else {
    $output = json_encode(array('success' => false));
    die($output);
  }
}