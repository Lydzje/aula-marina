<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once '../db/connection.php';
include '../php-functions/functions.php';

$error = false;
if (isset($_POST['login'])) {
    if (verify_login($_POST['username'], $_POST['password'], $result) == 1) {
        $_SESSION['user'] = $result;
        header("location: home.php");
    } else {
        $error = true;
    }

}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Aula Marina Admin | Login </title>

	<link rel="stylesheet" href="../css/admin.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
	<div class="login-site">
		<div class="wrap wrap-login">
			<div class="wrapper-admin-login">
				<div class="content-admin-login">
					<div class="login-logo">
						<a href="../index.php">
							<img alt="Logo del Aula Marina" src="../res/aula-marina-logo.png" />
						</a>
					</div>

					<div class="form-wrapper">
						<div class="form-title">
							<span>INICIAR SESIÓN</span>
						</div>

						<form class="login" method="POST">
							<div class="field">
								<span>Usuario</span>
								<input type="text" placeholder="Nombre de usuario" name="username" />
							</div>

							<div class="field">
								<span>Contraseña</span>
								<input type="password" placeholder="Contraseña" name="password" />
							</div>

							<?php 
							if ($error) {
								echo "
								<div class=\"field\">
								<div class=\"error\">El usuario o la contraseña son incorrectos, inténtelo de nuevo</div>
								</div>
								";
							}
							?>

							<div class="field">
							<div></div>
							</div>

							<div class="submit">
								<input type="submit" value="CONFIRMAR" name="login" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript"><?php if($error) echo "var anim=false;"; else echo "var anim=true;"?></script>
	<script src="../js/admin.js"></script>
</body>

</html>
