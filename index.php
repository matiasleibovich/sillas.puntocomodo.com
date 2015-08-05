<?php
	require_once('data.php');
?>
<!-- landing -->
<!DOCTYPE html>
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
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>

	</head>
	<body>
		
	    <?php include_once('header.php'); ?>

		<!-- body -->
		<div style="position: absolute; float: right; text-align: right; width: 100%;">
		<img src="img/puntocomodo/compra_segura_2.png">
		</div>

		<div style="position: absolute; float: left; text-align: left; width: 100%; top: 20px;">
		<img src="img/puntocomodo/calidad_2.png">
		</div>

		<div style="position: absolute; float: left; text-align: left; width: 100%; left: 150px;">
		<a href="#" onClick="mostrarContacto();"><img src="img/puntocomodo/contacto.png" border=0></a>
		</div>

		<div class="cuerpo" style="margin-top: 50px;">
			<div class="container">
				
				<form method="post" action="gracias.php">					
					<div class="text-center logo" style="height: 100px;">
						<img src="img/puntocomodo/punto_comodo_logo430.png" class="img-responsive center-block" alt="Punto Comodo" />
						<img src="img/puntocomodo/punto_comodo_slogan.png" class="img-responsive center-block" alt="Punto Comodo" style="position:relative; top: -30px;"/>
					</div>
					
					<?php foreach ($_pasos as $paso) { ?>
						<div class="paso" id="paso_<?=$paso['id']?>" data-paso-id="<?=$paso['id']?>" data-paso-tipo="<?=$paso['tipo']?>" data-paso-label="<?=$paso['titulo']?>">
							<!--resumen-->
							<div class="row resumen" <?=($paso['id'] > $start -1 ?'style="display:none"':'')?>>
								<h2 class="titulo"><?=$paso['titulo']?>
									<span class="opciones">
										<!--<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> Opcion </span>-->
									</span>
									<a class="btn btn-default pull-right boton-modificar"><span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar</a>
								</h2>
							</div>
							<!--/resumen-->
							<!--formulario-->
							<div class="formulario" <?=($paso['id'] != $start ?'style="display:none"':'')?>>
								<div class="row row-pregunta">
									<?php if ((isset($paso['lead'])) and ($paso['lead'] == true)) { ?>
										<p class="lead"><?=$paso['lead']?></p>
									<?php } ?>
									<h2 class="text-center">
										<?=$paso['pregunta']?>
										<small class="visible-xs">click para seleccionar uno o varios</small>
									</h2>
								</div>
								<?php if (is_array($paso['opciones'])) { ?>
									<div class="row row-opciones" style="text-align: center;">
										
										<?php foreach ($paso['opciones'] as $op) { ?>
										<div class="col-sm-2 opcion <?php if (isset($op['class_name'])) echo $op['class_name']; ?>" id="opcion_<?=$op['id']?>" data-opcion-id="<?=$op['id']?>" data-opcion-value="<?=$op['valor']?>" data-opcion-label="<?=$op['label']?>" style="float: middle; margin: auto;">
											<?php if ($paso['tipo'] == 'set') { ?>
												<input type="hidden" name="valores[<?=$paso['campo_id']?>][<?=$op['id']?>]" value="0" />
											<?php } ?>
											<div class="form-group">											
											<?php $height = ''; if ($paso['id'] == '3') $height = 'style="height:80px;"'; ?>
											<?php if ((isset($op['class_name'])) and (strpos($op['class_name'], 'REV_INDEX') > 0)) { $on_click = 'onClick="opciones_revestimientos(this, '."'_".$op['class_name']."'".');"'; } else { $on_click = ''; } ?>
										    <a href="#" class="seleccionar-opcion"><img id="img_<?=$op['id']?>" src="<?=$op['img']?>" class="img-responsive deseleccionada" width="150" <?=$height?> <?=$on_click?>></a>
										    <label for="opcion_<?=$op['id']?>" class="seleccionar-opcion" style="height: 60px;"><?=$op['label']?></label>
										  </div>
										</div>
										<?php } // ops ?>

									</div><!--/.row.row-opciones-->
								<?php } // opciones // ?>
								<div class="row row-boton text-right form-inline">
									<?php if ($paso['tipo'] == 'value') { ?>
										<input type="number" class="form-control input-lg escribir-valor" name="valores[<?=$paso['campo_id']?>]" id="valor_paso_<?=$paso['id']?>" placeholder="<?=$paso['placeholder']?>" style="width:<?=$paso['width']?>;font-weight:bold;">
										<label for="valor_paso_<?=$paso['id']?>"><?=$paso['label']?></label>
									<?php } ?>
									<?php if ((isset($paso['cta_ultimo'])) and ($paso['cta_ultimo'] == true)) { ?>
										<a href="#" class="strong btn btn-xl btn-warning btn-ultimo" data-toggle="modal" data-target="#modal_contacto"><?=$paso['cta']?></a>
									<?php } else { ?>
										<?php if (!isset($paso['cta_activo'])) { $paso['cta_activo'] = ''; } ?>
										<a id="paso_<?=$paso['id']+1?>_boton" href="#" class="strong boton-paso btn btn-lg btn-warning <?=( $paso['cta_activo'] ? 'siempre-activo' : 'disabled' )?>"><?=$paso['cta']?></a>
									<?php } ?>
								</div><!--/row-boton-->
							</div><!--/formulario-->
						</div><!--/paso-->
					<?php } ?>
					
					<!-- ultimo paso -->
					<div class="modal fade" id="modal_contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="apadding-top: 100px; adisplay:block; aopacity:1;">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<!-- comentario -->
									<div class="text-center row row-comentario">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="form-group">
												<input type="hidden" id="solo_consulta" name="solo_consulta" value="no">
												<label for="comentario" class="control-label">Dejanos tus comentarios y consultas:</label>
												<textarea class="form-control input-lg" id="comentario" name="valores[11]" rows="2" placeholder="Escribí tus comentarios aquí"></textarea>
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Es muy importante para personalizar los presupuestos</strong></span>
											</div>
										</div>
									</div>
									<!-- campos -->
									<div class="form-horizontal row campos">
										<!-- nombre -->
										<div class="form-group">
											<label for="nombre" class="col-sm-3 control-label">Nombre</label>
											<div class="col-sm-8">
												<input type="text" name="valores[7]" class="form-control input-lg" id="nombre" placeholder="Escribí tu nombre">
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Por favor dejanos tu nombre completo</strong></span>
												<span class="error-feedback help-block"><strong>Tu nombre es obligatorio</strong></span>
											</div>
										</div>
										<!-- email -->
										<div class="form-group">
											<label for="email" class="col-sm-3 control-label">E-Mail</label>
											<div class="col-sm-8">
												<input type="email" name="valores[8]" class="form-control input-lg" id="email" placeholder="A donde recibirás los presupuestos">
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Por favor ingresá un e-mail válido</strong></span>
												<span class="error-feedback help-block"><strong>Tu e-mail es obligatorio</strong></span>
											</div>
										</div>
										<!-- telefono -->
										<div class="form-group">
											<label for="telefono" class="col-sm-3 control-label">Teléfono</label>
											<div class="col-sm-8">
												<input type="text" name="valores[9]" class="form-control input-lg" id="telefono" placeholder="Para que puedan contactarte" value="">
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Por favor ingresá un teléfono válido</strong></span>
												<span class="error-feedback help-block"><strong>Tu teléfono es obligatorio</strong></span>
											</div>
										</div>
										<!-- zona -->
										<?php 
											if (!isset($_ocultar_zona)) $_ocultar_zona = false;
											if (!$_ocultar_zona) { 
										?>
										<div class="form-group">
											<label for="zona" class="col-sm-3 control-label">Zona</label>
											<div class="col-sm-8">
												<select class="form-control input-lg" id="zona" name="valores[10][<?=$_zonas[$_zona]['id']?>]" data-name="valores[10][NNN]" value="1">
													<option value="Capital Federal">Capital Federal</option>
													<option value="Zona Norte">Zona Norte</option>
													<option value="Zona Oeste">Zona Oeste</option>
													<option value="Zona Sur">Zona Sur</option>
													<option value="Gran Buenos Aires">Gran Buenos Aires</option>
													<option value="Zona Sur">Interior del Pa&iacute;s</option>
												</select>
											</div>
										</div>
										<?php } ?>
									</div><!-- campos -->
		  						<div class="modal-footer">
						        <button type="submit" class="btn btn-success btn-xl">&iexcl; Recibir Presupuestos !</button>
						      </div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- / ultimo paso -->
					
				</form>
				
			</div><!--/.container-->
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
		
		
		<script>
			
			// array para contar la cantidad de opciones seleccionadas en cada paso
			var selecciones = new Object();
			
			// activamos o desactivamos el boton siguiente
			// si es un set = tiene que tener 1 o mas selecciones
			// si es un value = tiene que tener un valor en el campo value
			function toggle_siguiente ( paso_id )
			{
				var paso_tipo = $('.paso#paso_'+paso_id).attr('data-paso-tipo');
				var habilitar = false;
				if (paso_tipo == 'set')
				{
					if (selecciones[paso_id])
						habilitar = true;
				}
				else if (paso_tipo == 'value')
				{
					if ($('input#valor_paso_'+paso_id).val() != '')
						habilitar = true;
				}
				// jodemos el css
				if (habilitar)
					$('.paso#paso_'+paso_id).find('.boton-paso').removeClass('disabled');
				else
				{
					if ( ! $('.paso#paso_'+paso_id).find('.boton-paso').hasClass('siempre-activo') )
						$('.paso#paso_'+paso_id).find('.boton-paso').addClass('disabled');
				}
			}
			
			// selecciona una opcion de un paso, manejando
			// las distintas opciones segun el tipo de paso
			function seleccionar_opcion ( opcion_id, opcion_valor )
			{
				//console.log('seleccionar_opcion('+opcion_id+','+opcion_valor+')');
				
				// buscamos informacion del paso
				var paso_id = $('#opcion_'+opcion_id).closest('.paso').attr('data-paso-id');
				var paso_tipo = $('#opcion_'+opcion_id).closest('.paso').attr('data-paso-tipo');
				
				if (paso_tipo == 'set')
				{
					// swapeamos el input hidden de la opcion entre 1 o 0
					$('.opcion#opcion_'+opcion_id+' input[type=hidden]').val( $('.opcion#opcion_'+opcion_id+' input[type=hidden]').val() == 1 ? 0 : 1 );
					
					// contabilizamos cantidad de opciones seleccionadas
					if (!selecciones[paso_id]) selecciones[paso_id] = 0;
					selecciones[paso_id] += $('.opcion#opcion_'+opcion_id+' input[type=hidden]').val() == 1 ? 1 : -1;			
				}
				else if (paso_tipo == 'value')
				{
					// seteamos el campo de texto con el valor de la opcion
					$('input#valor_paso_'+paso_id).val( opcion_valor );
					
					// des-seleccionamos las anteriores
					$('.paso#paso_'+paso_id).find('img.seleccionada').removeClass('seleccionada');
				}
				
				// seleccionamos la imagen
				$('img#img_'+opcion_id).toggleClass('seleccionada');
				
				// activamos o desactivamos el boton
				toggle_siguiente(paso_id);
				
				//console.log('opcion_id = '+opcion_id+', opcion_valor = '+opcion_valor+', paso_id = '+paso_id+', paso_tipo = '+paso_tipo+', selecciones = '+selecciones[paso_id]);
				return false;
			}
			
			// avanza un paso en las preguntas
			function siguiente ( paso_id )
			{
				// armamos el resumen del paso terminado
				//<span class="opciones">
				//  <span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> Fibra de vidrio</span>

				// verifica que no haya seleccionado posabrazos para omitir el paso
				if (paso_id == 3) {
					// primero se fija si alguno de los modelos usa apoyabrazos
					apoyabrazos = false;
					$('.paso#paso_2 img.seleccionada').each( function(){
						id = this.id;
						id = id.replace('img_', 'opcion_');
						class_name = $('#'+id).attr('class');
						if (class_name.indexOf("CON_AP") >= 0) { apoyabrazos = true; }
					});
					// si el modelo seleccionado no tiene apoyabrazos, saltea el paso
					if (apoyabrazos == false) {
						seleccionar_opcion('opcion_sin_ap', 'sin_ap');
						$('#img_sin_ap').removeClass('deseleccionada');
						$('#img_sin_ap').addClass('seleccionada');
						$('#img_pie_estandard').removeClass('deseleccionada');
						$('#img_pie_estandard').addClass('seleccionada');

						$('.paso#paso_3 img.seleccionada').each( function(index,value){
							var label = $(this).closest('.opcion').attr('data-opcion-label');
							$('.paso#paso_3 .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+label+'</span>');
						});

						$('.paso#paso_4 img.seleccionada').each( function(index,value){
							var label = $(this).closest('.opcion').attr('data-opcion-label');
							$('.paso#paso_4 .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+label+'</span>');
						});

						$('#paso_5_boton').removeClass('disabled');
						$('#paso_6_boton').removeClass('disabled');

						$('.paso#paso_3 .formulario').hide();
						$('.paso#paso_3 .resumen').show();
						$('.paso#paso_4 .formulario').hide();
						$('.paso#paso_4 .resumen').show();

						paso_id = 5;
					}
				}

				var paso_tipo = $('.paso#paso_'+paso_id).attr('data-paso-tipo');
				$('.paso#paso_'+paso_id+' .resumen .opciones').html('');
				if (paso_tipo == 'set')
				{
					// recorremos opciones de imagenes seleccionadas para crear los labels
					$('.paso#paso_'+paso_id+' img.seleccionada').each( function(index,value){
						var label = $(this).closest('.opcion').attr('data-opcion-label');
						$('.paso#paso_'+paso_id+' .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+label+'</span>');
					});
				}
				else if (paso_tipo == 'value')
				{
					var label = $('.paso#paso_'+paso_id).attr('data-paso-label');
					var valor = $('#valor_paso_'+paso_id).val();
					$('.paso#paso_'+paso_id+' .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+valor+' '+label+'</span>');
				}
				
				// animacion para mostrar el proximo paso
				$('.paso#paso_'+paso_id+' .formulario').slideUp('normal', function(){
					$('.paso#paso_'+paso_id+' .resumen').slideDown( 'normal', function(){
						$('.paso#paso_'+(parseInt(paso_id)+1)+' .resumen').hide();
						$('.paso#paso_'+(parseInt(paso_id)+1)+' .formulario').show();
						$('.paso#paso_'+(parseInt(paso_id)+1) ).slideDown('fast',function(){
							//console.log('scroll bottom paso '+paso_id);
							$('body').animate({ scrollTop:$(document).height() } );
						});
					});
				});
				
			}
			
			// vuelve a maximizar la opcion seleccionada, 
			// ocultando todas las siguientes
			function modificar( paso_id )
			{
				// oculta los posteriores
				for (var i = parseInt(paso_id) + 1 ; i < <?=count($_pasos)?> ; i++)
					$('.paso#paso_'+i+' .formulario, .paso#paso_'+i+' .resumen').slideUp('normal');
				// parche para usar el callback del ultimo paso escondido:
				$('.paso#paso_'+i+' .formulario, .paso#paso_'+i+' .resumen').slideUp( 'fast', function(){
					// oculta el resumen del paso a editar
					$('.paso#paso_'+paso_id+' .resumen').slideUp('normal', function(){
						// muestra el formulario del paso a editar
						$('.paso#paso_'+paso_id+' .formulario').slideDown();
					});
				});
				return false;
			}
			
			// revisa que no tenga errores y ejecuta el submit
			function submit_form ( )
			{
				validate_form($('input#nombre'),true);
				validate_form($('input#email'),true);
				validate_form($('input#telefono'),true);
				
				// control para no ejecutar 2 veces haciendo <enter>
				if ($('.modal button').hasClass('disabled'))
					return false;
				
				// buscamos errores
				if ( $('.modal .campos .form-group.has-error, .modal .campos .form-group.has-warning').length )
					return false;
				
				// otros errores posibles
				if ($('input#nombre').val() == "" || $('input#email').val() == "" || $('input#telefono').val() == "")
					return false;
				
				// evitamos doble click en el boton submit
				$('.modal button').addClass('disabled');
				//return false;
			}
			
			// valida lo que el usuario va tipeando y da feedback visual
			function validate_form ( obj, on_blur )
			{
				//console.log('validate '+obj.attr('name')+' = '+obj.val());
				if (!on_blur && obj.val() == '')
					return false;
				
				if (obj.attr('id') == 'comentario')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning');
				}
				else if (obj.attr('id') == 'nombre')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-error has-feedback').removeClass('has-success has-warning');
					else if (!obj.val().match(/[\w]{3,}/g))
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success has-error');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning has-error');
				}
				else if (obj.attr('id') == 'email')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-error has-feedback').removeClass('has-success has-warning');
					else if (!obj.val().match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success has-error');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning has-error');
				}
				else if (obj.attr('id') == 'telefono')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-error has-feedback').removeClass('has-success has-warning');
					else if (!obj.val().match(/\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d/))
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success has-error');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning has-error');
				}
			}
			
			$(document).ready( function(){
				
				// handler: click en imagen o label de paso tipo set o value
				$('.seleccionar-opcion').click( function(){
					var opcion_id = $(this).closest('.opcion').attr('data-opcion-id');
					var opcion_valor = $(this).closest('.opcion').attr('data-opcion-value');
					seleccionar_opcion( opcion_id, opcion_valor );
					return false;
				});
				
				// cambio de valor manual en paso tipo value
				$('.escribir-valor').change( function(){
					var paso_id = $(this).closest('.paso').attr('data-paso-id');
					toggle_siguiente(paso_id);
				});
				
				// boton "siguiente"
				$('.boton-paso').click( function(){
					var paso_id = $(this).closest('.paso').attr('data-paso-id');
					ocultar_opciones ( parseInt(paso_id)+1 );

					siguiente( paso_id );
					// oculta las opciones del siguiente paso según la selección
					return false;
				});
				
				// over a imagenes
				$('img.deseleccionada').hover(function () {
					$(this).toggleClass("deseleccionada over");
				});
				
				// over al resumen para link de modificar
				$('.row.resumen').hover(function () {
					$(this).toggleClass("over");
				});
				
				// boton modificar
				$('.boton-modificar').click( function(){
					var paso_id = $(this).closest('.paso').attr('data-paso-id');
					modificar( paso_id );
				});
				
				// focus en el modal
				$('#modal_contacto').on('shown.bs.modal', function (e) {
				  $('textarea#comentario').focus();
				});
				
				// submit final
				$('.cuerpo .container form').submit( function(){
					return submit_form();
				});
				
				// keystrokes y cambios en campos del form
				$('.modal input, .modal textarea').keyup( function(event) {
					validate_form( $(this) );
				}).keydown(function( event ) {
					validate_form( $(this) );
				});
				$('.modal input, .modal textarea').blur( function() { validate_form( $(this), true ); });
				
				// asignar name al <select> de la zona
				$('select#zona').change( function(){
					$(this).attr('name', $(this).attr('data-name').replace(/NNN/g, $(this).val() ) );
				});
				
				//$('#modal_contacto').modal('show');
				
			});

			function ocultar_opciones ( paso_id ) {
				
				if (paso_id == 2) {
					// selecciona los modelos según el tipo seleccionado en el paso 1
					<?php foreach ($_pasos[0]['opciones'] as $opcion) { ?>
						opcion_class_names = $("#img_<?=$opcion['id']?>").attr('class');
						if (opcion_class_names.search(" seleccionada ") != -1) {
							$( ".<?=$opcion['id']?>").each(function() {
							  $("#"+this.id).show();
							});
						} else {
							$( ".<?=$opcion['id']?>").each(function() {
							  $("#"+this.id).hide();
							});
						}
					<?php } ?>
				}

				if (paso_id == 3) {
					// oculta todas las opciones de revestimientos y muestra solo los tipos de revestimiento
					$( ".REV_OPCION").each(function() {
					  $("#"+this.id).hide();
					});
				}

			}

			function opciones_revestimientos ( img, class_name ) {
				img_class_names = $(img).attr('class');
				if (img_class_names.search(" seleccionada ") != -1) { mostrar = false; } else { mostrar = true; }
				rev_class_name = class_name;
				pos = rev_class_name.indexOf(' REV_INDEX');
				rev_class_name = rev_class_name.substr(0, pos);
				if (rev_class_name.search('TELA ') == true) { rev_class_name = rev_class_name.substr(6); }

				if (mostrar == true) {
					// octura todas las opciones
					$( ".REV_INDEX").each(function() {
					  $("#"+this.id).hide();
					});
					// muestra todas las opciones de rev_class_name
					$( "."+rev_class_name).each(function() {
					  $("#"+this.id).show();
					});
				} else {
					// oculta todas las opciones de rev_class_name
					$( "."+rev_class_name).each(function() {
					  $("#"+this.id).hide();
					});
					// muestra todas las opciones
					$( ".REV_INDEX").each(function() {
					  $("#"+this.id).show();
					});

				}
				
			}

			function mostrarContacto() {
				$('#solo_consulta').val('si');
				$('#modal_contacto').modal('show');

			}
		</script>

		<script src="js/bootstrap.min.js"></script>

		<script>
			var position = "400";
			$('.row-opciones')
			  .data('startingPosition', position)
			  .data('scrollXPos', position)
			  .smoothDivScroll('recalculateScrollableArea');
		  </script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-65998504-1', 'auto');
		  ga('send', 'pageview');
		</script>
		
	</body>
</html>