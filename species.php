<?php
include "db/connection.php";
include "php-functions/functions.php";

getBg(2, $bg);
if ($bg) {
  $bg = $bg->link;
} else {
  $bg = "";
}

getOneSpecies($_GET["id"], $info);

$comm_name   = $info->comm_name;
$description = $info->description;
if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $comm_name   = $info->en_comm_name;
    $description = $info->en_description;
  }
}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo $comm_name ?></title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	  crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
    <div class="bg bg-species"></div>
    <script>var bglink = "<?php echo $bg ?>";</script>
    <div class="wrapper">
    <?php include "nav.php"?>
    <div class="content">
      <div class="title">
        <span><?php echo $comm_name ?></span>
      </div>
      <div class="ind-species-box">
	<div class="ind-species-img">
          <img src="<?php echo $info->img ?>">
	</div>
	<div class="ind-species-text">
          <h1>
          <?php echo $comm_name ?> <br> (<?php echo $info->sci_name ?>)
          </h1>
          <p style="white-space:pre-wrap;text-align:justify;"><?php echo $description ?></p>
	</div>

      </div>
      </div>
      <?php include "footer.php"?>

    </div>
    <script src="js/main.js"></script>
  </body>

</html>
