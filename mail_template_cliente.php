<?php 

$link = 'http://puntocomodo.e-glu.com.ar';

ob_start();
require('pedido_info_mail.php');
$body_content = ob_get_clean();

$body = <<<EOT
<html>
<body>

	<div align="center" style="text-align:center;">
		<img src="$link/img/puntocomodo/logo_presupuesto2.png">
	</div>

	<div align="center" style="text-align:center; margin-top:15px;">
	<table align="center" style="background: #CCC none repeat scroll 0% 0%; width: 80%; border: 0px solid #000; box-shadow: 5px 5px 10px #888; text-align: center; font-family: Open San,Arial,sans-serif; font-weight: 500; font-style: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
	<tr><td style="padding: 10px;">
		<b>Muchas gracias por tu consulta.</b><br>
		Uno de nuestros asesores se contactar&aacute; con usted a la brevedad.
	</td></tr></table>
	</div>

	<div style="margin: 20px auto 0px; width: 100%; font: 11pt Trebuchet MS,Tahoma,Verdana;">
	Muchas gracias por tu consta! <br><br>

	Uno de nuestros asesores comerciales está recibiendo tu pedido en este momento, y prepará un presupuesto
	personalizado según tus necesidades. Te estaremos enviando un nuevo mail en donde podrás ver con detalle todas 
	las opciones disponibles para que puedas elegir y armar tus muebles de la forma en que más te guste o necesites.  <br><br>

	Te agradecemos por tu consulta y nos vamos a estar comunicando con vos a la brevedad. <br>
	Ante cualquier consulta o inquietud, por favor no dudes en contactarte con nosotros. <br>
	</div>

EOT;

$body .= $body_content;

$body .= <<<EOT

	<div style="display: block; padding: 0px 10px; width: 350px; font: 11pt Trebuchet MS,Tahoma,Verdana;">
	<img src="img/puntocomodo/home2.jpg" height="118" width="300">
	<h4>ASIENTOS EJECUTIVOS Y PROFESIONALES</h4>
	<p>Brindan comodidad y confianza a directivos exigentes que buscan prestigio, elegancia y estilo.&nbsp;Responden ergonómicamente a las necesidades de los profesionales que valoran una correcta postura.</p>
	</div>

	<div style="display: block; padding: 0px 10px; width: 350px; font: 11pt Trebuchet MS,Tahoma,Verdana;">
	<img src="img/puntocomodo/home1.jpg" height="118" width="300">
	<h4>ASIENTOS PARA AUDITORIO, RECEPCION Y HOGAR</h4>
	<p>Satisfacen requisitos de funcionalidad, flexibilidad y resistencia para lograr espacios cómodos y organizados.&nbsp;Productos prácticos y atractivos para crear espacios armónicos y confortables.</p>
	</div>

	<div style="display: block; padding: 0px 10px; width: 350px; font: 11pt Trebuchet MS,Tahoma,Verdana;">
	<img src="img/puntocomodo/home3.jpg" height="118" width="300">
	<h4>12 MESES DE GARANTIA. PAGO EN CUOTAS Y ENVIOS A TODO EL PAIS</h4>
	<p>Brindamos una garantía de 1 año. Los pagos pueden ser hasta en 12 cuotas sin interés (ver promociones vigentes). Entrega a domicilio en todo el país.</p>
	</div>

	<table style="width:100%; background-color:#F9DC39; margin: 0px; height:100px;">
	<tr><td style="width:80px; text-align:center;">

		<img align="middle" src="$link/img/puntocomodo/banner_logo.png">

	</td><td style="width:250px;">
	
		<div style="font: 9pt 'Trebuchet MS',Tahoma,Verdana; color: #555; margin: 10px;">
			<br><a href="puntocomodo.com" target="_new" style="color:#333; text-decoration:none;">PuntoComodo.com</a>
			<br>Muebles Ergon&oacute;micos a tu medida
			<br>(011) <b>15-3547-2187</b>
			<br><a href="mailto:ventas@puntocomodo.com" style="color:#333; text-decoration:none;">ventas@puntocomodo.com</a>
		</div>

	</td><td valign="top">

		<img src="$link/img/puntocomodo/banner_tarjetas_2.png"><br>
		<img src="$link/img/puntocomodo/banner_cuotas_2.png">

	</td></tr></table>

</body>
</html>
EOT;

?>