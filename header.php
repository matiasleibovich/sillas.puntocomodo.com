	  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #FADE3D; background-image: none;">
      <div class="container" style="width: 100%;">

      	<table style="width: 100%;">
      	<tr><td style="width: 250px;">
          <img src="img/puntocomodo/header_logo.png">
      	</td><td style="text-align:center;">

			<div id="slideshow">
			   <div>
			     <img src="img/puntocomodo/header_img_1.png" style="margin-top:10px;">
			   </div>
			   <div>
			     <img src="img/puntocomodo/header_img_2.png" style="margin-top:-2px;">
			   </div>
			   <div>
			     <img src="img/puntocomodo/header_img_3.png" style="margin-top:5px;">
			   </div>
			   <div>
			     <img src="img/puntocomodo/header_img_4.png">
			   </div>
			   <div>
			     <img src="img/puntocomodo/header_img_5.png">
			   </div>
			</div>

			<script>
				$("#slideshow > div:gt(0)").hide();

				setInterval(function() { 
				  $('#slideshow > div:first')
				    .fadeOut(1000)
				    .next()
				    .fadeIn(1000)
				    .end()
				    .appendTo('#slideshow');
				},  2500);
			</script>


      	</td><td style="width: 270px; text-align:center;">
            <img src="img/puntocomodo/banner_tarjetas_2.png">
      	</td><td style="width: 200px; font: 11pt 'Trebuchet MS',Tahoma,Verdana; color: #555; margin: 5px; text-align:center;">
				<span style="font-size: 14pt;">(011) <b>15-3547-2187</b></span><br>
				<a href="mailto:ventas@puntocomodo.com" style="color:#333; text-decoration:none;">ventas@puntocomodo.com</a>
      	</td></tr>
      	</table>

      </div>
      </nav>
