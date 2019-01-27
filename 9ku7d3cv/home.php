<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Aula Marina Admin | Inicio </title>

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
			<div class="content-admin content-admin-inicio">
				<span class="content-admin-title">INICIO</span>
				<div class="admin-content">
					<div class="admin-accesos-directos">
						<a href="featured.php">
							<i class="fas fa-star"></i>
							<span>DESTACADOS DE PORTADA</span>
						</a>
						<a href="species-of-the-month.php">
							<i class="fas fa-fish"></i>
							<span>ESPECIES DEL MES</span>
						</a>
						<a href="activities.php">
							<i class="fas fa-calendar-alt"></i>
							<span>ACTIVIDADES</span>
						</a>
						<a href="projects.php">
							<i class="fas fa-project-diagram"></i>
							<span>PROYECTOS</span>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>

</html>