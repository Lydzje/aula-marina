<?php
include_once 'db/connection.php';
include 'php-functions/functions.php';

getActivity($_GET['id'], $info);

$title       = $info->title;
$description = $info->description;
$ubication   = $info->ubication;

if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $title       = $info->en_title;
    $description = $info->en_description;
    $ubication   = $info->en_ubication;
  }
}
?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo $title ?></title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
    <div class="bg bg-activity"></div>
    <div class="wrapper">

      <?php include "nav.php"?>

      <div class="content">
        <div class="title">
          <span><?php echo $title ?></span>
          
        </div>

        <div class="section">
        <div class="section-top"></div>
        <div class="section-bot">
          <div class="section-left section-text">
            <p>
              <?php echo $description ?>
            </p>
            <p>
             <b>Ubicación: </b> 
               <?php echo $ubication ?>
            </p>
            <p>
              <b>Fecha: </b>
            <?php echo date("d-m-Y", strtotime($info->date)); ?>
            </p>
          </div>
          <div class="section-right section-img">
            <div class="slider-content" style="width:100%">
              <img src="<?php echo $info->img1?>" width="100%">
            </div>
            <div class="slider-content" style="display:none;width:100%;opacity:0;">
              <img src="<?php echo $info->img2?>" width="100%">
            </div>
            <div class="slider-content" style="display:none;width:100%;opacity:0;">
              <img src="<?php echo $info->img3?>" width="100%">
            </div>
            <div class="slider-content" style="display:none;width:100%;opacity:0;">
              <img src="<?php echo $info->img4?>" width="100%">
            </div>
            <div class="section-slider-buttons">
              <div class="slider-button" onclick="showSlide(0)" onmouseover="stopSlider()" onmouseout="resumeSlider()" style="background-color:white"></div>
              <div class="slider-button" onclick="showSlide(1)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
              <div class="slider-button" onclick="showSlide(2)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
              <div class="slider-button" onclick="showSlide(3)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
            </div>
            <div class="img-desc"></div>
          </div>
          </div>
        </div>
      </div>


    <?php include "footer.php";?>
    <script src="js/main.js"></script>
  </body>

</html>
