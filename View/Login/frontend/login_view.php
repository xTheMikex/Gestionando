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
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Iniciar Sesión
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
				
					<input class="input100" type="text" name="usuario" placeholder="">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="Clave" placeholder="Contraseña">
					<span class="focus-input100"></span>
				</div>
				<?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
			</div>
			
            <?php endif; ?>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Iniciar Sesión
					</button>
				</div>
 <br>
				<div class="text-center">
					<a href="index.php" class="txt2 hov1">
						Cancelar
					</a>
				</div>
			</form>

			
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