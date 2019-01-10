<?php
include "db/connection.php";
include "php-functions/functions.php";

getProject($_GET["id"],$info);
getSectionsOfProject($info->id,$sections);

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
    <div class="bg bg-project"></div>
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
                <div class=\"img-project\">
                <img src=\"$img1\">
                </div>
                <div class=\"section-slider-buttons\">
                <div class=\"slider-button\"></div>
                <div class=\"slider-button\"></div>
                <div class=\"slider-button\"></div>
                <div class=\"slider-button\"></div>
                </div>
                <div class=\img-desc\"></div>
                </div>
                <div class=\"text-project\">
                <span>
                $title
                </span>
                <p>
                $description
                </p>
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
                <p>
                $description
                </p>
                </div>
                <div>
                
                <div class=\"img-project\">
                <img src=\"$img1\">
                </div>
                <div class=\"section-slider-buttons\">
              <div class=\"slider-button\"></div>
              <div class=\"slider-button\"></div>
              <div class=\"slider-button\"></div>
              <div class=\"slider-button\"></div>
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
  </body>

</html>
