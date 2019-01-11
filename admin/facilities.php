<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
  header("location: login.php");
}

include_once '../db/connection.php';
include '../php-functions/functions.php';

if (isset($_POST['submit'])) {
  updateFacilities($_POST['img1'], $_POST['img2'], $_POST['img3'], $_POST['img4'], $_POST['description']);
}

getFacilitiesInfo($info);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Instalaciones </title>

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
      <a href="config.php"><i class="fas fa-cog"></i><span>CONFIGURACIÓN DE CUENTA</span></a>
    </div>
    <div class="wrapper-bot-side">
      <div class="content-admin">
        <span class="content-admin-title">INSTALACIONES</span>

        <div class="admin-content">

          <form class="admin-form2-wrapper" method="POST">
            <div class="admin-form2-title">DESCRIPCIÓN DE LAS INSTALACIONES</div>
            <div class="side-image-form">
              <div class="multimedia">
                <div class="img-nav">


                  <div class="image-nav-option" onclick="selectImg(0)">
                    <img src="<?php echo $info->img2 ?>">
                    <input class="img-link-input" type="hidden" name="img2" value="<?php echo $info->img2 ?>"/>
                  </div>

                  <div class="image-nav-option" onclick="selectImg(1)">
                    <img src="<?php echo $info->img3 ?>">
                    <input class="img-link-input" type="hidden" name="img3" value="<?php echo $info->img3 ?>"/>
                  </div>

                  <div class="image-nav-option" onclick="selectImg(2)">
                    <img src="<?php echo $info->img4 ?>">
                    <input class="img-link-input" type="hidden" name="img4" value="<?php echo $info->img4 ?>"/>
                  </div>


                </div>
                <div class="selected-img">
                  <img src="<?php echo $info->img1 ?>">
                  <input class="img-link-input" type="hidden" name="img1" value="<?php echo $info->img1 ?>"/>

                  <div class="select-file">
                    <input class='img-link' type="text" placeholder="URL de la imagen"><span id='file-button' onclick='loadSelectedImage()'>Cargar</span>
                  </div>

                </div>
              </div>
              <div class="admin-form2">
                <div class="field2">
                  <span>Descripción</span>
                  <textarea name="description" type="text" placeholder="Descripción de las instalaciones"><?php echo $info->description ?></textarea>
                </div>
                <div class="submit2" style="display:block;text-align:right;">
                  <input name="submit" type="submit" value="GUARDAR" />
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="../js/admin.js"></script>
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
</body>

</html>