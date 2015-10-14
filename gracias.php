<?php
	require_once('data.php');
	$datos = $_POST['valores'];
	$cliente = array();
	$cliente['nombre'] = $datos[7];
	$cliente['email'] = $datos[8];
	$cliente['telefono'] = $datos[9];
	$cliente['comentarios'] = $datos[11];
	$cliente['fecha'] = date('Y-m-d H:i');
	$zonas = $datos[10]; 
	$i = 1; 
	$cliente['zona'] = ''; 
	foreach($zonas as $una_zona) { 
		if ($i > 1) { $zona .= ', '; } 
		$cliente['zona'] .= $una_zona;
	} 

	$solo_consulta = false;
	if ((isset($_REQUEST['solo_consulta'])) and ($_REQUEST['solo_consulta'] == 'si')) { $solo_consulta = true; }

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

		<?php include_once('header.php'); ?>

		<div style="position: absolute; float: right; text-align: right; width: 100%;">
		<img src="img/puntocomodo/compra_segura_2.png">
		</div>

		<div style="position: absolute; float: right; text-align: left; width: 100%; top: 20px;">
		<img src="img/puntocomodo/calidad_2.png">
		</div>

		<div class="cuerpo" style="margin-top: 50px;">
			<div class="container">
				
				<div class="text-center logo">
				<img src="img/puntocomodo/logo_presupuesto2.png" class="img-responsive center-block" alt="Punto Comodo" />
				</div>

				<table border=0 align="center" style="border:0px solid black; width:90%; margin-top:20px;">
				<tr>
					<td colspan=3 style="text-align:center;">
						
						<table align="center" class="gracias-table"><tr><td>
						<b>Muchas gracias por tu consulta.</b><br>
						Uno de nuestros asesores se contactar&aacute; con vos a la brevedad.
						</td></tr></table>

					</td>
				</tr>
				</table>

				<?php if (!$solo_consulta) { ?>
				<div style="margin: 20px auto 0px; width: 90%; font: 11pt Trebuchet MS,Tahoma,Verdana;">
				Te hemos enviado un mail a tu casilla de correo con los datos que hemos recibido de tu consulta.
				Uno de nuestros asesores comerciales está recibiendo tu pedido en este momento, y prepará un presupuesto
				personalizado según tus necesidades. Te estaremos enviando un nuevo mail en donde podrás ver con detalle todas 
				las opciones disponibles para que puedas elegir y armar tus muebles de la forma en que más te guste o necesites.  <br><br>

				Te agradecemos por tu consulta y nos vamos a estar comunicando con vos a la brevedad.
				Ante cualquier consulta o inquietud, por favor no dudes en contactarte con nosotros. <br>
				</div>

				<?php require('pedido_info.php'); ?>
				<?php } ?>

				<br>
				<?php require('gracias_adicional.php'); ?>


									

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
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-66475440-1', 'auto');
		  ga('send', 'pageview');
		</script>

		<!-- Google Code for Consulta Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 955190422;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "JW3oCInZlF8Qlpm8xwM";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/955190422/?label=JW3oCInZlF8Qlpm8xwM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>
	</body>
</html>	

<?php 

	if ($solo_consulta) {
		flush();
		require_once('mail_aviso.php'); 
	} else {
		flush();
		require_once('mail_aviso.php'); 
		flush();
		require_once('mail_cliente.php'); 
	}
?>
