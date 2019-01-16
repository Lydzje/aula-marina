<?php
include "db/connection.php";
include "php-functions/functions.php";

getPeople(1, $mainPeople);
getPeople(0,$colabs1);
getColabsPhoto($colabsPhoto);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | Personal</title>


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
                <span>PERSONAL</span>
            </div>
            <div class="people-content">
                <?php
              for ($i=0; $i < count($mainPeople); $i++) { 
                $charge      = $mainPeople[$i]->charge;
                $name        = $mainPeople[$i]->name;
                $img         = $mainPeople[$i]->img;
                $description = $mainPeople[$i]->description;

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
            <div class="title">
                COLABORADORES
            </div>
            <div class="colabs-content">
              <?php
              for ($i=0; $i < count($colabs1); $i++) { 
                $charge     = $colabs1[$i]->charge;
                $name     = $colabs1[$i]->name;
                $img = $colabsPhoto->img;
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