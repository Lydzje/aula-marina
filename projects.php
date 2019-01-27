<?php
include "db/connection.php";
include "php-functions/functions.php";

getBg(8, $bg);
if ($bg) {
  $bg = $bg->link;
} else {
  $bg = "";
}

getProjects($info);

$titleText = "Proyectos";

if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $titleText = "Projects";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | <?php echo $titleText ?></title>

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-projects"></div>
  <script>var bglink = "<?php echo $bg ?>";</script>
  <div class="wrapper">
    <?php include "nav.php"?>
    <div class="content">
    <div class="title">
      <span><?php echo $titleText ?></span>
    </div>

    <div class="content-projects">
    <?php
      for ($i=0; $i < count($info) ; $i++) { 
        $id          = $info[$i]->id;
        $name        = $info[$i]->name;
        $description = $info[$i]->description;
        $img         = $info[$i]->img;
        $bg          = $info[$i]->bg;
      
        if (isset($_GET['lan'])) {
          if ( $_GET['lan'] == 'en') {
            $name        = $info[$i]->en_name;
            $description = $info[$i]->en_description;
          }
        }
        
        echo"
        <a class=\"project-x\" href=\"project.php$lanVar&id=$id\">
          <div class=\"project-x-img\">
            <img src=\"$img\">
          </div>
          <div class=\"text-projects\">
            <h1>
              $name
            </h1>
            <p style=\"white-space:pre-wrap;text-align:justify;\">$description</p>
          </div>
        </a>
        ";
      }

    ?>
    
    </div>
    </div>

  <?php 
  $notFixed = true;
  include "footer.php"
  ;?>
<script src="js/main.js"></script>
</body>

</html>
