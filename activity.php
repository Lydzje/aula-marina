<?php
include_once 'db/connection.php';
include 'php-functions/functions.php';

getActivity($_GET['id'], $info);

?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo $info->title ?></title>

    <link rel="stylesheet" href="./css/instalaciones.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>

    <div class="wrapper-instalaciones">

      <div class="header">
        <div class="logo-nav">
	  <div class="logo">
            <a href="./index.html">
              <img src="./res/aula-marina-logo.png">
            </a>
          </div>
          <div class="nav">
            <ul>
	      <a href="index.html"><li>INICIO</li></a>
              <a href="species-of-the-month.html"><li>ESPECIE DEL MES</li></a>
              <a href="aula-marina.html"><li>AULA MARINA</li></a>
              <a href="activities.html"><li>ACTIVIDADES</li></a>
              <a href="projects.html"><li>PROYECTOS</li></a>
              <a href="news.html"><li>NOTICIAS</li></a>
              <a href="contact.html"><li>CONTACTO</li></a>
            </ul>
          </div>

	  
        </div>
        <div class="lang">
          <a href="#">ES</a>
          <span>/</span>
          <a href="#">EN</a>
        </div>
      </div>
      <div class="content">
        <div class="title">
          <span><?php echo $info->title ?></span>
          
        </div>

        <div class="section">
          <div class="text">
            <p>
              <?php echo $info->description ?>
            </p>
            <p>
             <b>Ubicación: </b> 
               <?php echo $info->ubication ?>
            </p>
            <p>
              <b>Fecha: </b>
            <?php echo $info->date ?>
            </p>
          </div>
          <div class="images">
            <div>
              <img src="<?php echo $info->img ?>" width="100%">
            </div>
            <div class="slider-buttons">
              <div class="slider-button"></div>
              <div class="slider-button"></div>
              <div class="slider-button"></div>
              <div class="slider-button"></div>

            </div>
            <div class="img-desc"></div>
          </div>
        </div>
      </div>


      <footer>
        <div class="footer-top">
          <div class="logos">
            <a href="./index.html"><img class="aula-marina-logo" src="./res/aula-marina-logo.png"></a>
            <a href=""><img class="ceimar-logo" src="./res/ceimar-logo.png"></a>
            <a href=""><img class="ual-logo" src="./res/ual-logo.png"></a>
          </div>
          
          <div class="rrss">
            <div class="rrss-content">	    
              <span>SÍGUENOS EN</span>
              <div class="rrss-icons">
		<a href="#"><i class="fab fa-facebook-square"></i></a>
		<a href="#"><i class="fab fa-twitter-square"></i></a>
		<a href="#"><i class="fab fa-youtube-square"></i></a>
              </div>
            </div>
          </div>
          
          <div class="contact">
            <div class="contact-content">
              <span class="contact-text">LOCALIZACIÓN Y CONTACTO</span>
              <span class="contact-text">Aula Marina
		<span>Edificio Científico Técnico V</span>
              </span>
              <span class="contact-text">Ctra Sacramento s/n, 04120
		<span>La Cañada de San Urbano, Almería</span>
              </span>
              <a class="contact-text" href="contact.html">Saber más</a>
            </div>
          </div>	
        </div>
        
        <div class="footer-bot">
          <span>Copyright 2018 Aula Marina</span>
        </div>
      </footer>
      
  </body>

</html>
