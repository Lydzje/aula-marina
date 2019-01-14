<?php
include "db/connection.php";
include "php-functions/functions.php";

getProject($_GET["id"],$info);
getSectionsOfProject($info->id,$sections);

$bg = $info->bg;
if($bg == ""){
  $bg = "res/news2.jpg";
}

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo "$info->name"?></title>

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
	<span><?php echo "$info->name"?></span>
      </div>

      <div class="content-project">
          <?php
             for ($i=0; $i < count($sections) ; $i++) { 
              $title       = $sections[$i]->title;
              $description = $sections[$i]->description;
              $img1        = $sections[$i]->img1;
              $img2        = $sections[$i]->img2;
              $img3        = $sections[$i]->img3;
              $img4        = $sections[$i]->img4;
              if ($i%2==0) {
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
