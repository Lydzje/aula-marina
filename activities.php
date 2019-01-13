<?php 
include "db/connection.php";
include "php-functions/functions.php";

$past = false;
if (isset($_GET['past']) == 1) {
  $past = true;
}

getActivities($past, $activities);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Actividades</title>

  <link rel="stylesheet" href="./css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-activities"></div>

  <div class="wrapper">
    <?php include "nav.php"?>
    <div class="content">
      <div class="title">
        <span>ACTIVIDADES</span>
      </div>
    </div>

    <div class="section">
      <div class="section-top">
        <span>ÚLTIMAS ACTIVIDADES </span>

      </div>

      <div class="section-bot">
        <div class="section-left">
        <div class="slider-content" style="width:100%">
                <img src="res/ac1.jpeg">
              </div>
              <div class="slider-content" style="display:none;width:100%;opacity:0;">
                <img src="res/ac2.jpeg" width="100%">
              </div>
              <div class="slider-content" style="display:none;width:100%;opacity:0;">
                <img src="res/ac3.jpeg" width="100%">
              </div>
              <div class="slider-content" style="display:none;width:100%;opacity:0;">
                <img src="res/ac4.jpeg" width="100%">
              </div>
              <div class="section-slider-buttons">
                <div class="slider-button" onclick="showSlide(0)" style="background-color:white"></div>
                <div class="slider-button" onclick="showSlide(1)"></div>
                <div class="slider-button" onclick="showSlide(2)"></div>
                <div class="slider-button" onclick="showSlide(3)"></div>
          </div>
          <div>
            <div class="img-desc">
              PLAYA DE TORREGARCÍA
            </div>
          </div>

        </div>

        <div class="section-right section-text">
          <div class="par">
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
      <div class="title-act <?php if(!$past) echo 'active'?>" onclick="window.location='activities.php'">ACTIVIDADES PROGRAMADAS</div>
      <div class="title-act <?php if($past) echo 'active'?>" onclick="window.location='activities.php?past'">ACTIVIDADES REALIZADAS</div>
    </div>
    
    <div class="pepito">
    <?php 
    for ($i=0; $i < count($activities); $i++) { 
      $id          = $activities[$i]->id;
      $date        = date("d-m-Y", strtotime($activities[$i]->date));
      $title       = $activities[$i]->title;
      $description = $activities[$i]->description;
      $img         = $activities[$i]->img1;

      echo "
        <div class=\"section-left1\" onclick=\"window.location='activity.php?id=$id'\">
          <div class=\"img-desc\">
            <span>
              $date
            </span>
          </div>
          <div class=\"class2\">
            <img src=\"$img\" alt=\"\">
            <div class=\"section-left3\">
              <div>
                <span>
                  $title
                </span>
              </div>
              <p style=\"white-space:pre-wrap;text-align:justify;\">$description</p>
            </div>
          </div>
        </div>
      ";
    }
    ?>

    </div>
    <?php 
  $notFixed = true;
  include "footer.php";
  ?>
  </div>
  <script src="js/main.js"></script>
</body>

</html>