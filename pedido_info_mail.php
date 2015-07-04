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