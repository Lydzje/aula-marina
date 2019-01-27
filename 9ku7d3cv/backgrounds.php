<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header("location: login.php");
}

include_once '../db/connection.php';
include '../php-functions/functions.php';

$transactionDone = false;
if (isset($_POST['submit'])) {
  for ($i=1; $i <= 10; $i++) { 
    updateBg($i, $_POST["link".$i]);
  }
  $transactionDone = true;
}

getBgs($bgs);

$index      = $bgs[0]->link != "" ? $bgs[0]->link : "../res/min/index.jpg";
$species    = $bgs[1]->link != "" ? $bgs[1]->link : "../res/min/species.jpg";
$aulaMarina = $bgs[2]->link != "" ? $bgs[2]->link : "../res/min/aula-marina.jpg";
$people     = $bgs[3]->link != "" ? $bgs[3]->link : "../res/min/people.jpg";
$facilities = $bgs[4]->link != "" ? $bgs[4]->link : "../res/min/facilities.jpg";
$aboutUs    = $bgs[5]->link != "" ? $bgs[5]->link : "../res/min/about-us.jpg";
$activities = $bgs[6]->link != "" ? $bgs[6]->link : "../res/min/activities.jpg";
$projects   = $bgs[7]->link != "" ? $bgs[7]->link : "../res/min/projects.jpg";
$news       = $bgs[8]->link != "" ? $bgs[8]->link : "../res/min/news.jpg";
$contact    = $bgs[9]->link != "" ? $bgs[9]->link : "../res/min/contact.jpg";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Imágenes de fondo </title>

  <link rel="stylesheet" href="../css/admin.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="wrapper-admin-bg"></div>
  <div class="wrapper-admin-inicio">
    <div class="wrapper-admin-top-side">
      <div class="top-nav">
        <div class="top-nav-content">
          <div class="top-nav-left">
            <a href="home.php">
              <img alt="Logo del Aula Marina" src="../res/aula-marina-logo2.png" />
            </a>
          </div>
          <div class="top-nav-right">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>

    <div class="left-nav">
      <a href="home.php"><i class="fas fa-home"></i><span>INICIO</span></a>
      <a href="featured.php"><i class="fas fa-star"></i><span>DESTACADOS DE PORTADA</span></a>
      <a href="species-of-the-month.php"><i class="fas fa-fish"></i><span>ESPECIES DEL MES</span></a>
      <a href="activities.php"><i class="fas fa-calendar-alt"></i><span>ACTIVIDADES</span></a>
      <a href="projects.php"><i class="fas fa-project-diagram"></i><span>PROYECTOS</span></a>
      <a href="people.php"><i class="fas fa-users"></i><span>PERSONAL</span></a>
      <a href="facilities.php"><i class="fas fa-flask"></i><span>INSTALACIONES</span></a>
      <a href="about-us.php"><i class="fas fa-smile-beam"></i><span>SOBRE NOSOTROS</span></a>
      <a href="news.php"><i class=" fas fa-newspaper"></i><span>NOTICIAS</span></a>
      <a href="contact.php"><i class="fas fa-phone"></i><span>CONTACTO</span></a>
      <a href="rrss.php"><i class="fab fa-instagram"></i><span>REDES SOCIALES</span></a>
      <a href="backgrounds.php"><i class="fas fa-images"></i><span>IMÁGENES DE FONDO</span></a>
      <a href="config.php"><i class="fas fa-cog"></i><span>CONFIGURACIÓN DE CUENTA</span></a>
    </div>
    <div class="wrapper-bot-side">
      <div class="content-admin">
        <span class="content-admin-title">IMÁGENES DE FONDO</span>
        <div class="admin-content">
          <div class="admin-form2-wrapper">
            <div class="admin-form2-title">ENLACES A LAS IMÁGENES</div>
            <div class="admin-form2">
              <form method="POST">
                <div>
                  <div class="img-cola bgs" style="margin-top:0;width:100%;flex-wrap:wrap;">
                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(0);" title="Restaurar fondo por defecto"></i> Inicio</span>
                        <img class="colab-img" src="<?php echo $index ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage()">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link1" value="<?php echo $index ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(1);" title="Restaurar fondo por defecto"></i> Especie del Mes</span>
                        <img class="colab-img" src="<?php echo $species ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(1)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link2" value="<?php echo $species ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(2);" title="Restaurar fondo por defecto"></i> Aula Marina</span>
                        <img class="colab-img" src="<?php echo $aulaMarina ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(2)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link3" value="<?php echo $aulaMarina ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(3);" title="Restaurar fondo por defecto"></i> Personal</span>
                        <img class="colab-img" src="<?php echo $people ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(3)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link4" value="<?php echo $people ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(4);" title="Restaurar fondo por defecto"></i> Instalaciones</span>
                        <img class="colab-img" src="<?php echo $facilities ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(4)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link5" value="<?php echo $facilities ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(5);" title="Restaurar fondo por defecto"></i> Sobre Nosotros</span>
                        <img class="colab-img" src="<?php echo $aboutUs ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(5)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link6" value="<?php echo $aboutUs ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(6);" title="Restaurar fondo por defecto"></i> Actividades</span>
                        <img class="colab-img" src="<?php echo $activities ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(6)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link7" value="<?php echo $activities ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(7);" title="Restaurar fondo por defecto"></i> Proyectos</span>
                        <img class="colab-img" src="<?php echo $projects ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(7)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link8" value="<?php echo $projects ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(8);" title="Restaurar fondo por defecto"></i> Noticias</span>
                        <img class="colab-img" src="<?php echo $news ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(8)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link9" value="<?php echo $news ?>" />
                        </div>
                      </div>

                      <div class="img-cola-img-container" style="box-shadow:none">
                        <span style="text-align:center;display:block;"><i class="fas fa-retweet" onclick="defaultBg(9);" title="Restaurar fondo por defecto"></i> Contacto</span>
                        <img class="colab-img" src="<?php echo $contact ?>" >
                        <div class="select-file">
                          <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(9)">Cargar</span>
                          <input class="img-link-input" type="hidden" name="link10" value="<?php echo $contact ?>" />
                        </div>
                      </div>

                  </div>
                  </div>
                

                <?php 
                if ($transactionDone) {
                  echo "
                  <div class=\"field2\">
                  <div class=\"success\"> La operación se ha realizado con éxito</div>
                  </div>
                  ";
                }
                ?>

                <div class="submit2" style="display:block;text-align:right;">
                  <input name="submit" type="submit" value="GUARDAR" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/admin.js"></script>
</body>

</html>
