<?php 
include "db/connection.php";
include "php-functions/functions.php";

$past = false;
if (isset($_GET['past']) == 1) {
  $past = true;
}

getActivities($past, $activities);
getFeaturedActivity($featured);
if ($featured == null) {
  $featured = $activities[count($activities)-1];
}

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

    <div class="section" style="cursor:pointer;">
      <div class="section-top" onclick="window.location='activity.php?id=<?php echo $featured->id ?>'">
        <span><b>ACTIVIDAD DESTACADA</b></span>

      </div>

      <div class="section-bot">
        <div class="section-left">
        <div class="slider-content" style="width:100%" onclick="window.location='activity.php?id=<?php echo $featured->id ?>'">
                <img src="<?php echo $featured->img1 ?>" >
              </div>
              <div class="slider-content" style="display:none;width:100%;opacity:0;" onclick="window.location='activity.php?id=<?php echo $featured->id ?>'">
                <img src="<?php echo $featured->img2 ?>" width="100%">
              </div>
              <div class="slider-content" style="display:none;width:100%;opacity:0;" onclick="window.location='activity.php?id=<?php echo $featured->id ?>'">
                <img src="<?php echo $featured->img3 ?>" width="100%">
              </div>
              <div class="slider-content" style="display:none;width:100%;opacity:0;" onclick="window.location='activity.php?id=<?php echo $featured->id ?>'">
                <img src="<?php echo $featured->img4 ?>" width="100%">
              </div>
              <div class="section-slider-buttons" style="cursor:auto;">
                <div class="slider-button" onclick="showSlide(0)" onmouseover="stopSlider()" onmouseout="resumeSlider()" style="background-color:white"></div>
                <div class="slider-button" onclick="showSlide(1)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
                <div class="slider-button" onclick="showSlide(2)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
                <div class="slider-button" onclick="showSlide(3)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
          </div>
          <div>
            <div class="img-desc">
            </div>
          </div>

        </div>

        <div class="section-right section-text" onclick="window.location='activity.php?id=<?php echo $featured->id ?>'">
          <div class="par">
            <span><?php echo $featured->title ?></span>
            <p><?php echo $featured->description ?></p>
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
          <div class=\"news-date\">
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