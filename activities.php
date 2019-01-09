<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Actividades</title>

  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/activities.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="background-activities">
  </div>

  <div class="wrapper-activities">
    <?php include "nav.php"?>
    <div class="content-activities">
      <div class="text-activities">
        <span>ACTIVIDADES</span>
      </div>
    </div>

    <div class="section">
      <div class="section-top">
        <span>ÚLTIMAS ACTIVIDADES </span>

      </div>




      <div class="text-1">
        <div class="section-left">
          <img src="./res/principal-act.jpg" alt="">
          <div class="slider-buttons2">
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

        <div class="section-right">

          <div class="parrafo">

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
    <div class="title-act-gen">
      <div class="title-act">
        <a href="#">
          ACTIVIDADES REALIZADAS
        </a>
      </div>
      <div class="title-act">
        <a href="#">
          ACTIVIDADES PROGRAMADAS
        </a>
      </div>
    </div>
    <div class="pepito" onclick="window.location='activity.php?id=1'">
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

  </div>



  </div>
  </div>
  
  <?php 
  $notFixed = true;
  include "footer.php";
  ?>
</body>

</html>