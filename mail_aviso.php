<?php 

require_once('libs/PHPMailer/PHPMailerAutoload.php');
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
$mail->Subject = $cliente['fecha'].' :: Nueva Consulta ['.$cliente['nombre'].']';

$mail->addAddress('puntocomodo@gmail.com', 'PuntoComodo');

require('mail_template_aviso.php');
$mail->msgHTML($body);
$mail->AltBody = 'PuntoComodo.com';

flush();
$mail->send();
?>