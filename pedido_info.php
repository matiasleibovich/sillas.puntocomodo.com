				<table border=0 align="center" style="border:0px solid black; width:90%; margin-top:20px;">
				<tr>
					<td style="width:30%;" valign="top">

						<table class="consulta-datos-personales" style="background: #006D77 none repeat scroll 0% 0%; width: 100%; border: 0px solid #000; box-shadow: 5px 5px 10px #888; text-align: left;font-family: 'Open Sans',Arial,sans-serif; font-weight: 700; font-style: normal;	margin-top: 30px; color: white;	height: 300px; -webkit-border-radius: 5px; -moz-border-radius: 5px;	border-radius: 5px;">
						<tr><td valign="top" style="padding: 10px;">

							Nombre: 
							<input type="text" name="nombre" class="form-control input-lg" id="nombre" value="<?=$datos[7]?>" style="display:block; width: 100%; height: 30px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;">
							<br>Email: 
							<input type="text" name="email" class="form-control input-lg" id="email" value="<?=$datos[8]?>" style="display:block; width: 100%; height: 30px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;">
							<br>Tel&eacute;fono: 
							<input type="text" name="telefono" class="form-control input-lg" id="telefono" value="<?=$datos[9]?>" style="display:block; width: 100%; height: 30px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;">
							<br>Zona: 
							<?php 
								$zonas = $datos[10]; 
								$i = 1; 
								$label = ''; 
								foreach($zonas as $zona) { 
									if ($i > 1) { $labal .= ', '; } 
									$label .= $zona;
								} 
							?>
							<input type="text" name="zona" class="form-control input-lg" id="zona" value="<?=$zona?>" style="display:block; width: 100%; height: 30px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px;">
							<br>Comentarios: 
							<textarea name="comentarios" class="form-control input-lg input-textarea" id="comentarios" style="display:block; width: 100%; height: 30px; padding: 0px 16px; font-size: 16px; border-color: #66AFE9; outline: 0px none; box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(102, 175, 233, 0.6); line-height: 1.33; border-radius: 6px; color: #555; background-color: #FFF; background-image: none; border: 1px solid #CCC; margin-top: 2px; height: 160px; padding: 5px 16px; font-size: 14px;"><?=$datos[11]?></textarea>

						</td></tr></table>

					</td><td valign="top" style="width:30px;">

					</td><td valign="top" style="padding-top:10px;">

						<?php foreach ($_pasos as $paso) { 
   								$count = 0;
   								if (isset($datos[$paso['id']])) {
   									foreach($datos[$paso['id']] as $key=>$val) {  if ($val == 1) { $count++; } }
   								}
   								if ($count > 0) {

						?>
						<div id="paso_<?=$paso['id']?>" class="paso" style="box-sizing: border-box; border-collapse: collapse; border-spacing: 0px;">
					    	<div class="row resumen" style="padding: 5px 20px; border: 4px solid #DDD; margin: 20px 0px; border-radius: 5px; box-sizing: border-box; border-collapse: collapse; border-spacing: 0px;">
    							<h2 class="titulo" style="margin: 7px 0px 10px; font-family: "Open Sans",sans-serif; font-weight: 700; font-size: 30px; line-height: 1.1; box-sizing: border-box;">
    								<?=$paso['titulo']?>: <br>
									<span class="opciones">
									<?php 
										$label = '';
										foreach ($datos[$paso['id']] as $key=>$val) {  
											if ($val == 1) { 
												foreach ($paso['opciones'] as $opcion) {
													if ($opcion['id'] == $key) { $label = $opcion['label']; }
												}
									?>
										    <span class="label label-primary" style="display:inline-block; background-color: #428BCA; font-size: 18px; margin-left: 7px; padding: 0.2em 0.6em 0.3em; font-weight: 500; line-height: 1; color: #FFF; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: 0.25em; box-sizing: border-box; margin-top: 2px;">
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