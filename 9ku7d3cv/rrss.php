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
  updateRS(1, $_POST['fc']);
  updateRS(2, $_POST['tw']);
  updateRS(3, $_POST['yt']);
  updateRS(4, $_POST['ig']);
  $transactionDone = true;
}

getRRSS($rrss);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Redes Sociales </title>

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
        <span class="content-admin-title">REDES SOCIALES</span>
        <div class="admin-content">
          <div class="admin-form2-wrapper">
            <div class="admin-form2-title">ENLACES A REDES SOCIALES</div>
            <div class="admin-form2">
              <form method="POST">
                <div class="field2">
                  <span><i class="fab fa-facebook"></i> Facebook</span>
                  <input name="fc" type="text" value="<?php echo $rrss[0]->link; ?>" placeholder="Enlace a Facebook" />
                </div>
                <div class="field2">
                  <span><i class="fab fa-twitter"></i> Twitter</span>
                  <input name="tw" type="text" value="<?php echo $rrss[1]->link; ?>" placeholder="Enlace a Twitter" />
                </div>
                <div class="field2">
                  <span><i class="fab fa-youtube"></i> YouTube</span>
                  <input name="yt" type="text" value="<?php echo $rrss[2]->link; ?>" placeholder="Enlace a YouTube" />
                </div>
                <div class="field2">
                  <span><i class="fab fa-instagram"></i> Instagram</span>
                  <input name="ig" type="text" value="<?php echo $rrss[3]->link; ?>" placeholder="Enlace a Instagram" />
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

</body>

</html>
