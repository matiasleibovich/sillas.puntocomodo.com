				<table border=0 align="center" style="border:0px solid black; width:90%;">
				<tr>
					<td style="width:30%;" valign="top">

						<table class="consulta-datos-personales" style="background: #006D77 none repeat scroll 0% 0%; width: 100%; border: 0px solid #000; box-shadow: 5px 5px 10px #888; text-align: left;font-family: 'Open Sans',Arial,sans-serif; font-weight: 700; font-style: normal;	margin-top: 30px; color: white;	height: 300px; -webkit-border-radius: 5px; -moz-border-radius: 5px;	border-radius: 5px;">
						<tr><td valign="top" style="padding: 10px;">

							Tu Nombre: 
							<div id="nombre" style="display:block; width: 90%; height: 25px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;"><?=$cliente['nombre']?></div>
							<br>Tu Email: 
							<div id="nombre" style="display:block; width: 90%; height: 25px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;"><?=$cliente['email']?></div>
							<br>Tu Tel&eacute;fono: 
							<div id="nombre" style="display:block; width: 90%; height: 25px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;"><?=$cliente['telefono']?></div>
							<br>Zona de Entrega: 
							<div id="nombre" style="display:block; width: 90%; height: 25px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;"><?=$cliente['zona']?></div>
							<br>Comentarios: 
							<div id="nombre" style="display:block; width: 90%; padding: 0px 16px; padding-bottom: 2px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;"><?=$cliente['comentarios']?></div>

						</td></tr></table>

					</td><td valign="top" style="width:30px;">

					</td><td valign="top" style="padding-top:10px;">

						<?php foreach ($_pasos as $paso) { 
   								$count = 0;
   								if (isset($datos[$paso['id']])) {
   									foreach($datos[$paso['id']] as $key=>$val) {  if ($val == 1) { $count++; } }
   								}
   								if ($count > 0) {
   									$titulo = $paso['titulo'];
   									if ($titulo == 'Revestimientos, Telas y Colores') { $titulo = 'Revestimiento'; }

						?>
						<div id="paso_<?=$paso['id']?>" class="paso" style="box-sizing: border-box; border-collapse: collapse; border-spacing: 0px;">
					    	<div class="row resumen" style="padding: 5px 10px; border: 4px solid #DDD; margin: 20px 0px; border-radius: 5px; box-sizing: border-box; border-collapse: collapse; border-spacing: 0px;">
    							<h2 class="titulo" style="margin: 0px; font-family: Open Sans,sans-serif; line-height: 1.1; box-sizing: border-box; font-size:16px;">
    								<?=$titulo?>: 
									<span class="opciones">
									<?php 
										$label = '';
										foreach ($datos[$paso['id']] as $key=>$val) {  
											if ($val == 1) { 
												foreach ($paso['opciones'] as $opcion) {
													if ($opcion['id'] == $key) { $label = $opcion['label']; }
												}
									?>
										    <span class="label label-primary" style="display:inline-block; background-color: #428BCA; font-size: 16px; margin-left: 7px; padding: 0.2em 0.6em 0.3em; font-weight: 500; line-height: 1; color: #FFF; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25em; box-sizing: border-box; margin-top: 2px;">
										    	<span style="position: relative; top: 1px; display: inline-block; font-size: 22px; line-height: 1.1;"><b>&#10004;</b></span>
										    	<?=$label?>
										    </span>
								    <?php 	}
								    	} 
								    ?>

									</span>
								
								</h2>
							</div>
						</div>
						<?php }} ?>

					</td>
				</tr>
				</table>