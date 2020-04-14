<?php
echo "Ваше имя " . $_POST['name'];
echo "Ваш e-mail " . $_POST['email'];
echo "Тема " . $_POST['subject'];
echo "Сообщение " . $_POST['message'];

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

  $to = "ser.kokhov@gmail.com";
  $headers  = $email;


  mail($to, $subject, $message, $headers);
?>