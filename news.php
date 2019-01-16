<?php
include "db/connection.php";
include "php-functions/functions.php";

getNews($news);
getFeaturedNew($featured);

?>



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

    <div class="section" style="cursor:pointer;" onclick="window.open('<?php echo $featured->link ?>', '_blank');">
      <div class="section-top">
        <span><b>NOTICIA DESTACADA</b></span>
      </div>

      <div class="section-bot">
        <div class="section-left section-img">
          <img src="<?php echo $featured->img ?>" alt="">
          <div class="section-slider-buttons">

          </div>
          <div>
            <div class="img-desc">
            </div>
          </div>
        </div>

        <div class="section-right section-text">
          <div class="par">
            <span><?php echo $featured->title ?></span>
            <p><?php echo $featured->description ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="pepito">

    <?php
    $pos = "left1";
    for ($i=0; $i < count($news) ; $i++) { 
      $date = date("d-m-Y", strtotime($news[$i]->date));
      $title = $news[$i]->title;
      $description = $news[$i]->description;
      $link = $news[$i]->link;
      $img = $news[$i]->img;
      
      if ($i%2 == 0) {
        $pos="section-left1";
      }else{
        $pos="section-right1";
      }

      echo "
      <div class=\"$pos\" onclick=\"window.open('$link', '_blank');\">
        <div class=\"news-date\">
          <span>
            $date
          </span>
        </div>
        <div class=\"class2\">
          <img src=\"$img\">
          <div class=\"section-left3\">
            <div>
              <span>
                $title
              </span>
            </div>
            <p>
              $description
            </p>
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
