<?php 

require 'libs/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "puntocomodo@gmail.com";
$mail->Password = "Punt0C0m0d0";
$mail->setFrom('puntocomodo@gmail.com', 'PuntoComodo');
$mail->addReplyTo('puntocomodo@gmail.com', 'PuntoComodo');
$mail->Subject = 'PuntoComodo :: Muchas Gracias por tu Consulta';

$mail->addAddress($cliente['email'], $cliente['nombre']);

require('mail_template_cliente.php');
$mail->msgHTML($body);
$mail->AltBody = 'PuntoComodo.com';

flush();
$mail->send();
?>