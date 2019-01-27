<?php
include "db/connection.php";
include "php-functions/functions.php";

getBg(2, $bg);
if ($bg) {
  $bg = $bg->link;
} else {
  $bg = "";
}

getSpeciesYears($years);
getLastSpecies($last);
getSpecies($species);

$titleText  = "Especie del mes";
$month0     = $last->month;
$comm_name0 = $last->comm_name;
if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $titleText  = "Species of the month";
    $month0     = $last->en_month;
    $comm_name0 = $last->en_comm_name;
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
  <div class="bg bg-species-of-the-month"></div>
  <script>var bglink = "<?php echo $bg ?>";</script>
  <div class="wrapper">
  <?php include "nav.php"?>
  <div class="content">
    <div class="title"><?php echo $titleText ?></div>
    <div class="species-box">
      <div class="recent-species" onclick="window.location='species.php?id=<?php echo $last->id; ?>'">
        <div class="recent-month">
          <?php echo $month0 ?>
        </div>
        <a class="recent-species-img" href="species.php<?php echo $lanVar.'&id='.$last->id ?>">
          <img src="<?php echo $last->img?>">
        </a>
        <div class="description-img">
          <h1>
           <a href="species.php?id=<?php echo $last->id ?>"><?php echo $comm_name0 ?></a> 
          </h1>
        </div>
      </div>
      <div class="lasted-species">
        <div class="dropdown">
          <?php 
          $year = 0;
          if (!isset($_GET['year'])) {
            $year = $years[0]->year;
          } else {
            $year = $_GET['year'];
          }
          ?>
          <select id="year-selector" class="button" onchange="goToYear('<?php echo $lanVar; ?>')">
              <option selected="selected" style="display:none" value="<?php echo $year; ?>"><?php echo $year; ?></option>
              <?php
              for ($i=0; $i < count($years); $i++) { 
                $y = $years[$i]->year;
                echo "<option value='$y'>$y</option>";
              }
              ?>
          </select>
          <div class="arrow" onclick="triggerYearSelector()"><i class="fas fa-angle-down"></i></div>
        </div>
      <div>
        <?php
        for ($i=0; $i < count($species); $i++) { 
          if ($species[$i]->year==$year) {
            $id        = $species[$i]->id;
            $month     = $species[$i]->month;
            $comm_name = $species[$i]->comm_name;
            $img       = $species[$i]->img;
            $link      = "?id=$id";

            if (isset($_GET['lan'])) {
              if ( $_GET['lan'] == 'en') {
                $month     = $species[$i]->en_month;
                $comm_name = $species[$i]->en_comm_name;
                $link      = "$lanVar&id=$id";
              }
            }
            echo "
            <a class=\"lasted-species-box\" href=\"species.php$link\">
          $month
          <img src=\"$img\">
           $comm_name
        </a>
            ";
          }
        }


        ?>
        

      </div>
      </div>
    </div>
    </div>  



    <?php include "footer.php"?>

  </div>

  <script src="js/main.js"></script>
</body>

</html>
