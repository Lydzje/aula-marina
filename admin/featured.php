<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("location: login.php");
}

include '../php-functions/functions.php';

if (isset($_POST['submit'])) {
    updateFeatureds($_POST['id'], $_POST['text'], $_POST['link']);
}

getFeatureds($featureds);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Destacados de Portada </title>

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
    </div>
    <div class="wrapper-bot-side">
      <div class="content-admin">
        <span class="content-admin-title">DESTACADOS DE PORTADA</span>

        <div class="admin-content">
          <div class="featured-form">
            <div class="featured-nav">
              <div class="featured-button" onclick="showDiv(0)">DESTACADO 1</div>
              <div class="featured-button" onclick="showDiv(1)">DESTACADO 2</div>
              <div class="featured-button" onclick="showDiv(2)">DESTACADO 3</div>
              <div class="featured-button" onclick="showDiv(3)">DESTACADO 4</div>
            </div>
            <div class="featureds">
              <form class="featured show-div" method="POST">
                <div class="featured-image">
                  <img alt="Imagen de destacado de portada" src="../res/inicio.png" />
                  <div class="select-file">
                    <input id="real-file-button" type='file'>
                    <span id='file-val'></span><span id='file-button'>Examinar..</span>
                  </div>
                </div>

                <div class="admin-form2-featured">
                  <input name="id" type="hidden" value="1">

                  <div class="field2">
                    <span>Texto</span>
                    <input name="text" type="text" value="<?php echo $featureds[0][1] ?>" placeholder="Texto del destacado" />
                  </div>

                  <div class="field2">
                    <span>Enlace</span>
                    <input name="link" type="text" value="<?php echo $featureds[0][2] ?>" placeholder="Enlace del destacado" />
                  </div>

                  <div class="submit2">
                    <input name="submit" type="submit" value="GUARDAR" />
                  </div>
                </div>
              </form>

              <form class="featured show-div" style="display:none" method="POST">
                <div class="featured-image">
                  <img alt="Imagen de destacado de portada" src="../res/actividades.png" />
                  <div class="select-file">
                    <input id="real-file-button" type='file'>
                    <span id='file-val'></span><span id='file-button'>Examinar..</span>
                  </div>
                </div>

                <div class="admin-form2-featured">
                  <input name="id" type="hidden" value="2">

                  <div class="field2">
                    <span>Texto</span>
                    <input name="text" type="text" value="<?php echo $featureds[1][1] ?>" placeholder="Texto del destacado" />
                  </div>

                  <div class="field2">
                    <span>Enlace</span>
                    <input name="link" type="text" value="<?php echo $featureds[1][2] ?>" placeholder="Enlace del destacado" />
                  </div>

                  <div class="submit2">
                    <input name="submit" type="submit" value="GUARDAR" />
                  </div>
                </div>
              </form>

              <form class="featured show-div" style="display:none" method="POST">
                <div class="featured-image">
                  <img alt="Imagen de destacado de portada" src="../res/noticias.png" />
                  <div class="select-file">
                    <input id="real-file-button" type='file'>
                    <span id='file-val'></span><span id='file-button'>Examinar..</span>
                  </div>
                </div>

                <div class="admin-form2-featured">
                  <input name="id" type="hidden" value="3">

                  <div class="field2">
                    <span>Texto</span>
                    <input name="text" type="text" value="<?php echo $featureds[2][1] ?>" placeholder="Texto del destacado" />
                  </div>

                  <div class="field2">
                    <span>Enlace</span>
                    <input name="link" type="text" value="<?php echo $featureds[2][2] ?>" placeholder="Enlace del destacado" />
                  </div>

                  <div class="submit2">
                    <input name="submit" type="submit" value="GUARDAR" />
                  </div>
                </div>
              </form>

              <form class="featured show-div" style="display:none" method="POST">
                <div class="featured-image">
                  <img alt="Imagen de destacado de portada" src="../res/personal.png" />
                  <div class="select-file">
                    <input id="real-file-button" type='file'>
                    <span id='file-val'></span><span id='file-button'>Examinar..</span>
                  </div>
                </div>

                <div class="admin-form2-featured">
                  <input name="id" type="hidden" value="4">

                  <div class="field2">
                    <span>Texto</span>
                    <input name="text" type="text" value="<?php echo $featureds[3][1] ?>" placeholder="Texto del destacado" />
                  </div>

                  <div class="field2">
                    <span>Enlace</span>
                    <input name="link" type="text" value="<?php echo $featureds[3][2] ?>" placeholder="Enlace del destacado" />
                  </div>

                  <div class="submit2">
                    <input name="submit" type="submit" value="GUARDAR" />
                  </div>
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