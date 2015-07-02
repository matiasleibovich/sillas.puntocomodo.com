<?php
	require_once('data.php');
	$datos = $_POST['valores'];
	$cliente = array();
	$cliente['nombre'] = $datos[7];
	$cliente['email'] = $datos[8];
	$cliente['telefono'] = $datos[9];
	$cliente['fecha'] = date('Y-m-d H:m');
?>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="PuntoComodo">
		<title>PuntoComodo - Todo lo que busc&aacute;s en un s&oacute;lo lugar...</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,700italic' rel='stylesheet' type='text/css'>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/puntocomodo/landing.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/puntocomodo/puntocomodo.ico">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<body>

		<div class="cuerpo">
			<div class="container">
				
				<div class="text-center logo">
					<img src="img/puntocomodo/punto_comodo_logo430.png" class="img-responsive center-block" alt="Punto Comodo" />
					<img src="img/puntocomodo/punto_comodo_slogan.png" class="img-responsive center-block" alt="Punto Comodo" />
				</div>

				<table border=0 align="center" style="border:0px solid black; width:90%; margin-top:20px;">
				<tr>
					<td colspan=3 style="text-align:center;">
						
						<table align="center" class="gracias-table"><tr><td>
						<b>Muchas gracias por tu consulta.</b><br>
						Uno de nuestros asesores se contactar&aacute; con usted a la brevedad.
						</td></tr></table>

					</td>
				</tr>
				</table>

				<?php require('pedido_info.php'); ?>
									
			</div>
		</div>

		<div class="pie navbar-fixed-bottom">
			<div class="container">
				
				<small>
					&copy; <span class="hidden-xs"><?=date('Y')?></span> PuntoComodo.com - Todos los derechos reservados &nbsp;|&nbsp;
					<a href="terminos.php">T&eacute;rminos y Condiciones</a> &nbsp;|&nbsp;
					<a href="privacidad.php">Privacidad</a>
				</small>
				
			</div>
		</div>					

		<script src="js/bootstrap.min.js"></script>
		
	</body>
</html>	

<?php 
	flush();
	require_once('mail_puntocomodo.php'); 
?>