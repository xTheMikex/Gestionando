<?php 
	
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: ../temple/index.php');
}else{

	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['Clave']))
		{
			$alert = 'Ingrese su usuario y su clave';
		}else{

			require_once "../../Controller/conexionlog.php";

			$user = mysqli_real_escape_string($conexion,$_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conexion,$_POST['Clave']));

			$query = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario= '$user' AND Clave = '$pass'");
			mysqli_close($conexion);
			$result = mysqli_num_rows($query);

			if($result > 0)
			{
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['id_usuario'];
				$_SESSION['cedula'] = $data['cedula'];
				$_SESSION['email']  = $data['correo'];
				$_SESSION['user']   = $data['usuario'];
				$_SESSION['rol']    = $data['rol_usuario'];

				header('location: ../temple/index.php');
			}else{
				$alert = 'El usuario o la clave son incorrectos';
				session_destroy();
			}


		}

	}
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gestionando</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/xd-removebg-preview.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="container-login100" style="background-image: url('images/esfero.jpg'); "  >
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		<form action="" method="post">
		<span class="login100-form-title p-b-48">
						<i><img src="../../img/xd-removebg-preview.png" heigth="100" width="100"> </i>
					</span>
				<span class="login100-form-title p-b-37">
					Iniciar Sesión
				</span>
				
				<label class="input50">Usuario</label>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Ingrese el usuario">
					<input class="input100" type="text" name="usuario" placeholder="">
					<span class="focus-input100"></span>
				</div>
				<label class="input50">Contraseña</label>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Ingrese la contraseña">
					<input class="input100" type="password" name="Clave" placeholder="">
					<span class="focus-input100"></span>
				</div>
				
				<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
				<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" value="INGRESAR">
					
			
			</form>
			</div>
			<br>
			<div class="input50 text-center">
					<a href="../../index.php" class=" input50 txt2 hov1">
						Cancelar
					</a>
				</div>
	</div>
	
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>