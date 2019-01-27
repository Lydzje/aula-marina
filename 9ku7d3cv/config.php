<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
  header("location: login.php");
}

include_once '../db/connection.php';
include '../php-functions/functions.php';

$error = null;
$transactionDone = false;
if (isset($_POST['submit'])) {
    if ($_POST['password'] == $_POST['rep-password']) {
      if ($_POST['password'] == '') {
        $error = "cadenaVacía";
      }else{
        updateAccount($_POST['username'], $_POST['password']);
        $transactionDone = true;
      }
    }else {
      $error = "passDiferentes";
    }
}

getAccountInfo($info);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Configuración de Cuenta </title>

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
        <span class="content-admin-title">CONFIGURACIÓN DE CUENTA</span>
        <div class="admin-content">
          <div class="admin-form2-wrapper">
            <div class="admin-form2-title">CUENTA DE ADMINISTRADOR</div>
            <div class="admin-form2">
              <form method="POST">
                <div class="field2">
                  <span>Usuario</span>
                  <input name="username" type="text" value=<?php echo $info->username; ?> placeholder="Nombre de usuario" />
                </div>
                <div class="field2">
                  <span>Contraseña</span>
                  <input name="password" type="password" placeholder="Contraseña">
                </div>
                <div class="field2">
                  <span>Repetir Contraseña</span>
                  <input name="rep-password" type="password" placeholder="Repetir Contraseña" />
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
              <div style="margin-top: 16px"></div>
              <?php 
							if ($error == "cadenaVacía") {
								echo "
								<div class=\"field2\">
								<div class=\"error\">La contraseña no debe de ser una cadena vacía</div>
								</div>
								";
							}else if ($error == "passDiferentes") {
								echo "
								<div class=\"field2\">
								<div class=\"error\">Las contraseñas deben de coincidir</div>
								</div>
								";
							}
              ?>
              
							



                <div class="submit2" style="display:block;text-align:right;">
                  <input name="submit" type="submit" value="APLICAR" />
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
