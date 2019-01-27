<?php
include "db/connection.php";
include "php-functions/functions.php";

getPeople(1, $mainPeople);
getPeople(0,$colabs);
getColabsPhoto($colabsPhoto);

$titleText       = "Personal";
$colabsTitleText = "Colaboradores";

if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $titleText  = "People";
    $colabsTitleText = "Colaborators";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo $titleText ?></title>


    <link rel="stylesheet" href="./css/style.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
    <div class="bg bg-people"></div>
    <div class="wrapper">
        <?php include "nav.php"?>
        <div class="content">
            <div class="title">
                <span><?php echo $titleText ?></span>
            </div>
            <div class="people-content">
                <?php
              for ($i=0; $i < count($mainPeople); $i++) { 
                $charge      = $mainPeople[$i]->charge;
                $name        = $mainPeople[$i]->name;
                $img         = $mainPeople[$i]->img;
                $description = $mainPeople[$i]->description;

                if (isset($_GET['lan'])) {
                    if ( $_GET['lan'] == 'en') {
                      $charge     = $mainPeople[$i]->en_charge;
                      $description = $mainPeople[$i]->en_description;
                    }
                }
                
                if($i%2==0){
                echo "
                <div class=\"people-left\">
                <div class=\"people-img\">
                    <img src=\"$img\">
                </div>
                <div class=\"people-text\">
                    <div class=\"people-title\">
                        <span>$charge</span>
                    </div>
                    <div class=\"people-description\">
                        <p>$name</p>
                        <div><br></div>
                        <p>$description</p>
                    </div>
                </div>
            </div>

                ";

                }else{

                  echo "
                  <div class=\"people-right\">
                    <div class=\"people-text\">
                        <div class=\"people-title\">
                            <span>$charge</span>
                        </div>
                        <div class=\"people-description\">
                            <p>$name</p>
                            <div><br></div>
                            <p>$description</p>
                        </div>
                    </div>
                    <div class=\"people-img\">
                        <img src=\"$img\">
                    </div>
                </div>
                  ";
                }
              }
            ?>
                
              



            </div>
            <div class="title"><?php echo $colabsTitleText ?></div>
            <div class="colabs-content">
              <?php
              for ($i=0; $i < count($colabs); $i++) { 
                $charge     = $colabs[$i]->charge;
                $name       = $colabs[$i]->name;
                $img        = $colabsPhoto->img;

                if (isset($_GET['lan'])) {
                    if ( $_GET['lan'] == 'en') {
                      $charge     = $colabs[$i]->en_charge;
                    }
                }
                
                if($i%2==0){
                  echo "
                  <div class=\"people-left\">
                    <div class=\"people-img\">
                        <img src=\"$img\" style=\"height:100px; width:100px;\">
                    </div>
                    <div class=\"people-text\">
                        <div class=\"people-title\">
                            <span>$charge</span>
                        </div>
                        <div class=\"people-description\">
                            <p>$name</p>
                        </div>
                    </div>
                </div>
                  ";
                }else{
                  echo "
                  <div class=\"people-right\">
                    <div class=\"people-text\">
                        <div class=\"people-title\">
                            <span>$charge</span>
                        </div>
                        <div class=\"people-description\">
                            <p>$name</p>
                        </div>
                    </div>
                    <div class=\"people-img\">
                        <img src=\"$img\" style=\"height:100px; width:100px;\">
                    </div>


                </div>
                  ";
                  
                }

              }
              ?>             
               
            </div>

        </div>

        <?php
      $notFixed = true;
      include "footer.php"
      ?>
<script src="js/main.js"></script>
</body>

</html>