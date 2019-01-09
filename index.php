<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | Inicio</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
    <div class="bg bg-index"></div>
    <div class="wrapper">
			<?php include "nav.php"?>
      <div class="index-content">
				<div class="text slider-content">
          <span>CONOCE EL MAR ALMERIENSE</span>
				</div>

				<div class="text slider-content" style="display:none;opacity:0;">
          <span>CONOCE NUESTRA ESPECIE DEL MES</span>
				</div>
	
				<div class="text slider-content" style="display:none;opacity:0;">
          <span>APÚNTATE A NUESTRAS ACTIVIDADES</span>
				</div>
	
				<div class="text slider-content" style="display:none;opacity:0;">
          <span>ECHA UN VISTAZO A NUESTRO LABORATORIO</span>
				</div>
	
				<div class="slider-buttons">
					<div class="slider-button" onclick="showSlide(0)" style="background-color:white"></div>
					<div class="slider-button" onclick="showSlide(1)"></div>
					<div class="slider-button" onclick="showSlide(2)"></div>
					<div class="slider-button" onclick="showSlide(3)"></div>
				</div>
      </div>
    </div>
		<?php include "footer.php"?>
    <script src="js/main.js"></script>
  </body>
</html>
