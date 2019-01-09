<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Noticias</title>

  <link rel="stylesheet" href="./css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-news"></div>
  <div class="wrapper">
    <?php include "nav.php"?>
    <div class="content">
      <div class="title">
        <span>NOTICIAS</span>
      </div>
    </div>

    <div class="section">
      <div class="section-top">
        <span>NOTICIA DESTACADA</span>
      </div>

      <div class="section-bot">
        <div class="section-left section-img">
          <img src="./res/noticias-principal.jpg" alt="">
          <div class="section-slider-buttons">
            <div class="slider-button"></div>
            <div class="slider-button"></div>
            <div class="slider-button"></div>
            <div class="slider-button"></div>
          </div>
          <div>
            <div class="img-desc">
              PLAYA DE TORREGARCÍA
            </div>
          </div>
        </div>

        <div class="section-right section-text">
          <div class="parr">
            <span>
              ACTIVIDAD DE VOLUNTARIADO AMBIENTAL PARQUE NATURAL CABO DE GATA
            </span>
            <p>
              El pasado sábado 12 de mayo estuvimos en la playas de Torregarcía, dentro de los límites del Parque Natural Cabo de Gata-Nijar,
              ayudando en una limpieza de la playas juento con nuestros amigos de Ecocampus.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="pepito">
      <div class="section-left1">
        <div class="img-desc">
          <span>
            25/12/2015
          </span>
        </div>
        <div class="class2">
          <img src="./res/principal-act.jpg" alt="">
          <div class="section-left3">
            <div>
              <span>
                ACTIVIDAD DE VOLUNTARIADO AMBIENTAL PARQUE NATURAL CABO DE GATA
              </span>
            </div>
            <p>
              El pasado sábado 12 de mayo estuvimos en la playas de Torregarcía, dentro de los límites del Parque Natural Cabo de Gata-Nijar,
              ayudando en una limpieza de la playas juento con nuestros amigos de Ecocampus.
            </p>
          </div>
        </div>
      </div>
      <div class="section-right1">
        <div class="img-desc">
          <span>
            25/12/2015
          </span>
        </div>
        <div class="class2">
          <img src="./res/principal-act.jpg" alt="">
          <div class="section-right3">
            <div>
              <span>
                ACTIVIDAD DE VOLUNTARIADO AMBIENTAL PARQUE NATURAL CABO DE GATA
              </span>
            </div>
            <p>
              El pasado sábado 12 de mayo estuvimos en la playas de Torregarcía, dentro de los límites del Parque Natural Cabo de Gata-Nijar,
              ayudando en una limpieza de la playas juento con nuestros amigos de Ecocampus.
            </p>
          </div>
        </div>
      </div>
    </div>
  <?php 
  $notFixed = true;
  include "footer.php";
  ?>
  </div>
</body>
</html>
