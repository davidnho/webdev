<?php

require_once '../class.phpmailer.php';

$mail = new PHPMailer();

$name = $_POST['name'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['comment'];

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'noelsdavid@gmail.com';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('noelsdavid@gmail.com', $name);
$mail->addAddress('noelsdavid@gmail.com');     // Add a recipient
$mail->addReplyTo('noelsdavid@gmail.com', 'Information');
$mail->addCC('');
$mail->addBCC('');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody ="";

if (!$mail->Send()) {
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
}

echo "Message has been sent";
?>