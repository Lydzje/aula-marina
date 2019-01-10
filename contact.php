<?php
include "db/connection.php";
include "php-functions/functions.php";

getContactInfo($info);
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | Contacto</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
    <div class="bg bg-contact"></div>
    <div class="wrapper">
      <?php include "nav.php"?>
      <div class="content">

      
      <div class="title">
        <span>CONTACTO</span>
      </div>
      <div class="loc-cont-box">
        <div class="location-box">
          <h1>Ubicación</h1>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.433893605343!2d-2.4026608850680775!3d36.832083279941955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDQ5JzU1LjUiTiAywrAyNCcwMS43Ilc!5e0!3m2!1ses!2ses!4v1542824639805"
                    width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="contact-box">
          <div class="inner-contact-box">

            <h1>Contacto</h1>
            <p style="white-space:pre-wrap;margin-bottom:32px;"><?php echo $info->description ?></p>
            <div class="contact-info">
              <div>
                <p><b>Teléfono: </b><br><?php echo $info->phone ?><br></p>
                <p><b>Email: </b><br><?php echo $info->email ?><br></p>
                <p><b>Horario de atención: </b><br><?php echo $info->hour ?><br></p>
              </div>
              <div>
                <p style="white-space: pre-wrap;"><b>Dirección postal: </b><br><?php echo $info->address ?></p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <?php 
  include "footer.php";
  ?>

    </div>
  </body>

</html>
