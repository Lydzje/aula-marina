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
    updateProject($_GET['id'], $_POST['name'], $_POST['description'], $_POST['img-link'], $_POST['bg-link']);
}

getProject($_GET['id'], $info);
$id = $info->id;
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Editar Proyecto </title>

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
        <span class="content-admin-title">EDITAR PROYECTO</span>
        <div class="admin-content">
          <div class="admin-form2-wrapper">
            <div class="admin-form2-title">DATOS DEL PROYECTO</div>
            <div class="admin-form2">
              <form method="POST">
                <div class="field2">
                  <span>Título</span>
                  <input name="name" type="text" placeholder="Nombre del proyecto" value="<?php echo $info->name ?>" />
                </div>

                <div class="field2">
                    <span>Descripción</span>
                    <textarea name="description" type="text" placeholder="Descripción del proyecto"><?php echo $info->description ?></textarea>
                </div>

                <div class="img-cola" style="margin-top:0;width:100%;">
                    <div class="img-cola-img-container" style="box-shadow:none">
                    <img class="colab-img" src="<?php echo $info->img ?>">
                    <span><i class="far fa-image"></i>Imagen</span>

                    <div class="select-file">
                        <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage()">Cargar</span>
                        <input class="img-link-input" type="hidden" name="img-link" value="<?php echo $info->img ?>" />
                    </div>
                    </div>
                    <div class="img-cola-img-container" style="box-shadow:none">
                    <img class="colab-img" src="<?php echo $info->bg ?>">
                    <span><i class="far fa-image"></i>Fondo</span>

                    <div class="select-file">
                        <input class="img-link" type="text" placeholder="URL de la imagen"><span id="file-button" onclick="loadColabImage(1)">Cargar</span>
                        <input class="img-link-input" type="hidden" name="bg-link" value="<?php echo $info->bg ?>" />
                    </div>
                    </div>
                </div>

                <div class="field2">
                    <span class="manage-sections" onclick="window.location='sections.php?project_id=<?php echo $id ?>'"><i class="fas fa-cogs"></i> Gestionar Secciones</span>
                </div>

                <div class="submit2">
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
