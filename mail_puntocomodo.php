<?php 

include_once('libs/Mail.php');

$from = "PuntoComodo <puntocomodo@gmail.com>";
$to = $cliente['nombre']." <".$cliente['email'].">";
$subject = "PuntoComodo :: Muchas Gracias por su Consulta";

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = "puntocomodo@gmail.com";
$password = "Punt0C0m0d0";

$headers = array (
  'From' => $from,
  'To' => $to,
  'Subject' => $subject,
  'MIME-Version' => '1.0',
  'Content-type' => 'text/html; charset=iso-8859-1',  
);

$smtp = Mail::factory('smtp',
  array (
  	'host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

require('mail_template_1.php');
$mail = $smtp->send($to, $headers, $body);


if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }

?>