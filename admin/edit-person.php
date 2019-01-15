<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header("location: login.php");
}

include_once '../db/connection.php';
include '../php-functions/functions.php';

getPerson($_GET['id'], $info); // Necesario para saber si es main o no, ya se actualiza más abajo si toca

$transactionDone = false;
if (isset($_POST['submit'])) {
    if ($info->main == 1) {
        updatePerson($_GET['id'], true, $_POST['name'], $_POST['charge'], $_POST['description'], $_POST['img-link']);
    } else {
        updatePerson($_GET['id'], false, $_POST['name'], $_POST['charge'], "null", "null");
    }
    $transactionDone = true;
}

getPerson($_GET['id'], $info);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | <?php if($info->main==1) echo "Editar Persona Principal"; else echo "Editar Colaborador" ?> </title>

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
      <a href="config.php"><i class="fas fa-cog"></i><span>CONFIGURACIÓN DE CUENTA</span></a>
    </div>
    <div class="wrapper-bot-side">
      <div class="content-admin">
        <span class="content-admin-title"><?php if($info->main==1) echo "EDITAR PERSONA PRINCIPAL"; else echo "NUEVO COLABORADOR" ?></span>
        <div class="admin-content">
          <div class="admin-form2-wrapper">
            <div class="admin-form2-title">DATOS DE LA PERSONA</div>
            <div class="admin-form2">
              <form method="POST">
                <div class="field2">
                  <span>Nombre</span>
                  <input name="name" type="text" placeholder="Nombre" value="<?php echo $info->name?>" />
                </div>
                <div class="field2">
                  <span>Cargo</span>
                  <input name="charge" type="text" placeholder="Cargo" value="<?php echo $info->charge?>" />
                </div>
                <?php
                if ($info->main == "1") {
                    echo "
                    <div class=\"field2\">
                    <span>Descripción</span>
                    <textarea name=\"description\" type=\"text\" placeholder=\"Más detalles\">$info->description</textarea>
                    </div>

                    <div class=\"img-cola\" style=\"margin-top:0;width:100%;\">
                      <div class=\"img-cola-img-container\" style=\"box-shadow:none\">
                        <img class=\"colab-img\" src=\"$info->img\" >
                        <span><i class=\"far fa-image\"></i>Imagen</span>
    
                        <div class=\"select-file\">
                          <input class=\"img-link\" type=\"text\" placeholder=\"URL de la imagen\"><span id=\"file-button\" onclick=\"loadColabImage()\">Cargar</span>
                          <input class=\"img-link-input\" type=\"hidden\" name=\"img-link\" value=\"$info->img\" />
                        </div>
                      </div>
                    </div>
                    ";
                }
                ?>

                <?php 
                if ($transactionDone) {
                  echo "
                  <div class=\"field2\">
                  <div class=\"success\"> La operación se ha realizado con éxito</div>
                  </div>
                  ";
                }
                ?>


                <div class="submit2">
                <span class="cancel-button" onclick="window.location='people.php'">CANCELAR</span>
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
  <script src="../js/nicEdit-latest.js" type="text/javascript"></script>
  <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

    <style>
    .nicEdit-main {
      font-size: 12px;
      resize: vertical;
      height: 10px;
      overflow: auto !important;
      background-color: white;
      padding: 4px;
      margin: 0 !important;
    }

    .nicEdit-panelContain {
      border: 0 !important;
      border-radius: 5px 5px 0 0 !important;
    }

    .field2 > div:nth-child(2) {
      border: 2px solid #001534 !important;
      border-bottom: 0 !important;
      border-radius: 5px 5px 0 0;
      width: 97.5% !important;
    }

    .field2 > div:nth-child(3) {
      border: 2px solid #001534 !important;
      border-top: 0 !important;
      border-radius: 0 0 5px 5px;
      width: 97.5% !important;
    }
  </style>
</body>

</html>
