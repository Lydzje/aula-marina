<?php
include "db/connection.php";
include "php-functions/functions.php";

getProject($_GET["id"], $info);
getSectionsOfProject($info->id, $sections);

if (!$sections) {
  $sections = [];
}

$bg = $info->bg;
if($bg == ""){
  $bg = "res/min/projects.jpg";
}

$name        = $info->name;
$description = $info->description;

if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $name        = $info->en_name;
    $description = $info->en_description;
  }
}

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo "$name"?></title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	  crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
    <div class="bg bg-project" style="background-image: url('<?php echo $bg ?>');"></div>
    <div class="wrapper">
      <?php include "nav.php"?>
      <div class="title">
	      <span><?php echo "$name"?></span>
      </div>

      <div class="content-project">

      <div class="section-project">
        <div>
          <div class="img-project">
            <div class="" style="width:100%">
              <img src="<?php echo $info->img ?>">
            </div>
          </div>
        </div>
        <div class="img-desc">
        </div>
        <div class="text-project">
          <span><?php echo $name ?></span>
          <p><?php echo $description ?></p>
        </div>
      </div>

          <?php
             for ($i=0; $i < count($sections) ; $i++) { 
              $title       = $sections[$i]->title;
              $description = $sections[$i]->description;
              $img1        = $sections[$i]->img1;
              $img2        = $sections[$i]->img2;
              $img3        = $sections[$i]->img3;
              $img4        = $sections[$i]->img4;

              if (isset($_GET['lan'])) {
                if ( $_GET['lan'] == 'en') {
                  $title       = $sections[$i]->en_title;
                  $description = $sections[$i]->en_description;
                }
              }
              
              if ($i%2==1) {
                echo "
                <div class=\"section-project\">
                <div>
                <div class=\"img-project slider\">
                <div class=\"slider-content\" style=\"width:100%\">
                  <img src=\"$img1\">
                </div>
                <div class=\"slider-content\" style=\"display:none;width:100%;opacity:0;\">
                  <img src=\"$img2\">
                </div>
                <div class=\"slider-content\" style=\"display:none;width:100%;opacity:0;\">
                  <img src=\"$img3\">
                </div>
                <div class=\"slider-content\" style=\"display:none;width:100%;opacity:0;\">
                  <img src=\"$img4\">
                </div>
                </div>
                <div class=\"section-slider-buttons\">
                <div class=\"slider-button\" onclick=\"showSlide(0, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\" style=\"background-color:white\"></div>
                <div class=\"slider-button\" onclick=\"showSlide(1, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\"></div>
                <div class=\"slider-button\" onclick=\"showSlide(2, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\"></div>
                <div class=\"slider-button\" onclick=\"showSlide(3, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\"></div>
                </div>
                <div class=\"img-desc\"></div>
                </div>
                <div class=\"text-project\">
                <span>
                $title
                </span>
                <p style=\"white-space:pre-wrap;text-align:justify;\">$description</p>
                </div>
                </div>
                ";
              }else{
                echo"
                <div class=\"section-project\">
                <div class=\"text-project\">
                <span>
                $title
                </span>
                <p style=\"white-space:pre-wrap;text-align:justify;\">$description</p>
                </div>
                <div>
                
                <div class=\"img-project slider\">
                <div class=\"slider-content\" style=\"width:100%\">
                  <img src=\"$img1\">
                </div>
                <div class=\"slider-content\" style=\"display:none;width:100%;opacity:0;\">
                  <img src=\"$img2\">
                </div>
                <div class=\"slider-content\" style=\"display:none;width:100%;opacity:0;\">
                  <img src=\"$img3\">
                </div>
                <div class=\"slider-content\" style=\"display:none;width:100%;opacity:0;\">
                  <img src=\"$img4\">
                </div>
                </div>
                <div class=\"section-slider-buttons\">
                <div class=\"slider-button\" onclick=\"showSlide(0, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\" style=\"background-color:white\"></div>
                <div class=\"slider-button\" onclick=\"showSlide(1, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\"></div>
                <div class=\"slider-button\" onclick=\"showSlide(2, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\"></div>
                <div class=\"slider-button\" onclick=\"showSlide(3, $i)\" onmouseover=\"stopSlider($i)\" onmouseout=\"resumeSlider($i)\"></div>
              </div>
              <div class=\"img-desc\"></div>
              </div>
              </div>
              ";
               }
            }
            ?>
	
</div>

<?php 
      $notFixed = true;
      include "footer.php";
      ?>

    <script src="js/main.js"></script>
  </body>

</html>
