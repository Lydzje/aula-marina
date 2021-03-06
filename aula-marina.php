<?php 
include "db/connection.php";
include "php-functions/functions.php";

getBg(3, $bg);
if ($bg) {
  $bg = $bg->link;
} else {
  $bg = "";
}

$peopleText     = "PERSONAL";
$facilitiesText = "INSTALACIONES";
$aboutUsText    = "SOBRE NOSOTROS";
if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $peopleText     = "PEOPLE";
    $facilitiesText = "FACILITIES";
    $aboutUsText    = "ABOUT US";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Aula Marina</title>

  <link rel="stylesheet" href="./css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-aula-marina"></div>
  <script>var bglink = "<?php echo $bg ?>";</script>
  <div class="wrapper">
    <?php include "nav.php"?>
    <div class="content" style="height:100%">

      <div class="title">AULA MARINA</div>
      <div class="content-aula-marina">
        <div class="aula-marina-links">
          <div class="personal"><a href="people.php"><?php echo $peopleText ?></a></div>
          <div class="instalaciones"><a href="facilities.php"><?php echo $facilitiesText ?></a></div>
          <div class="sobre-nosotros"><a href="about-us.php"><?php echo $aboutUsText ?></a></div>
        </div>
      </div>
    </div>

  <?php include "footer.php"?>
</div>

<script src="js/main.js"></script>

</body>

</html>
