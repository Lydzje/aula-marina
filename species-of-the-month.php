<?php
include "db/connection.php";
include "php-functions/functions.php";

getSpeciesYears($years);
getSpecies($species);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Especie del mes</title>

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-species-of-the-month"></div>
  <div class="wrapper">
  <?php include "nav.php"?>
  <div class="content">
    <div class="title">ESPECIE DEL MES</div>
    <div class="species-box">
      <div class="recent-species" onclick="window.location='species.php?id=<?php echo $species[0]->id; ?>'">
        <div class="recent-month">
          <?php echo $species[0]->month?>
        </div>
        <a class="recent-species-img" href="species.php?id=<?php echo $species[0]->id ?>">
          <img src="<?php echo $species[0]->img?>">
        </a>
        <div class="description-img">
          <h1>
           <a href="species.php?id=<?php echo $species[0]->id ?>"><?php echo $species[0]->comm_name ?></a> 
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
          <select id="year-selector" class="button" onchange="goToYear()">
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
            echo "
            <a class=\"lasted-species-box\" href=\"species.php?id=$id\">
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
