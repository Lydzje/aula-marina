<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Proyectos</title>

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-projects"></div>
  <div class="wrapper">
    <?php include "nav.php"?>
    <div class="content">
    <div class="title">
      <span>PROYECTOS</span>
    </div>

    <div class="content-projects">
      <a class="project-x" href="project.php?id=1">
        <div>
          <img src="./res/beach.jpg">
        </div>
        <div class="text-projects">
          <h1>
            LAS SALINAS DE CABO DE GATA
          </h1>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae nibh non metus tempus congue. Mauris vitae eleifend arcu, at bibendum nibh. Nulla convallis sed orci eget tincidunt. Fusce velit nisl, mattis sed pharetra ac, pretium nec ante. Curabitur consequat purus dui, vitae luctus ipsum aliquam vitae. Aenean commodo posuere magna, a luctus dolor. Quisque dictum tincidunt commodo. Mauris commodo placerat iaculis. Fusce semper velit sit amet urna euismod malesuada non et dolor. Curabitur at ipsum nulla. Nunc cursus consectetur dui non malesuada. Duis vehicula rutrum cursus. Fusce turpis dui, blandit vehicula bibendum vitae, hendrerit sed massa. Phasellus varius augue.
          </p>
        </div>
      </a>
      <a class="project-x" href="project.php?id=1">
        <div>
          <img src="./res/beach.jpg">
        </div>
        <div class="text-projects">
          <h1>
            NUESTRAS ESPECIES DISECADAS
          </h1>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae nibh non metus tempus congue. Mauris vitae eleifend arcu, at bibendum nibh. Nulla convallis sed orci eget tincidunt. Fusce velit nisl, mattis sed pharetra ac, pretium nec ante. Curabitur consequat purus dui, vitae luctus ipsum aliquam vitae. Aenean commodo posuere magna, a luctus dolor. Quisque dictum tincidunt commodo. Mauris commodo placerat iaculis. Fusce semper velit sit amet urna euismod malesuada non et dolor. Curabitur at ipsum nulla. Nunc cursus consectetur dui non malesuada. Duis vehicula rutrum cursus. Fusce turpis dui, blandit vehicula bibendum vitae, hendrerit sed massa. Phasellus varius augue.
          </p>
        </div>
      </a>
      <a class="project-x" href="project.php?id=1">
        <div>
          <img src="./res/beach.jpg">
        </div>
        <div class="text-projects">
          <h1>
            PROYECTO X
          </h1>
          <p>
             hendrerit sed massa. Phasellus varius augue.
          </p>
        </div>
      </a>
    </div>
    </div>



  <?php 
  $notFixed = true;
  include "footer.php"
  ;?>
</body>

</html>
