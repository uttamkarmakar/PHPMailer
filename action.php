<?php
  //Importing the autoload file from vendoe folder.
  require "./vendor/autoload.php";
  
  //Using PHPMailer library from vendor folder.
  use PHPMailer\PHPMailer\PHPMailer;

  if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "uttamkarmakar400@gmail.com";
    $mail->Password = "wsodxydwyhyhahqt";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->setFrom('uttamkarmakar400@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = "mail from uttam karmakar";
    $mail->Body = "Welcome to PHPMailer";
    $mail->send();
    echo "Sent";
}

