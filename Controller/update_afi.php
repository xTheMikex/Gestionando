<?php
define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'gestionando');//Nombre de la base de datos
$conexion=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$conexion){
	die("imposible conectarse: ".mysqli_error($conexion));
}
if (mysqli_connect_errno()) {
	die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}
?>
<?php

	if (empty($_POST['nombre'])) {
        $errors[] = "nombre esta vacío";
     }else if (empty($_POST['apellido'])) {
        $errors[] = "apellido esta vacío";
     }else if (empty($_POST['cedula'])) {
        $errors[] = "correo esta vacío";
    } else if (empty($_POST['correo'])) {
        $errors[] = "correo esta vacío";
     } else if (empty($_POST['telefono'])) {
        $errors[] = "telefono esta vacío";
     } else if (empty($_POST['direccion'])) {
        $errors[] = "salario esta vacío";
     }   else if (
         !empty($_POST['nombre']) &&
         !empty($_POST['apellido']) &&
         !empty($_POST['cedula']) &&
         !empty($_POST['correo']) &&
         !empty($_POST['telefono']) &&
         !empty($_POST['direccion']) 
     ){
        $nombre= mysqli_real_escape_string($conexion,(strip_tags($_POST["nombre"],ENT_QUOTES)));
        $apellido=mysqli_real_escape_string($conexion,(strip_tags($_POST["apellido"],ENT_QUOTES)));
        $cedula=mysqli_real_escape_string($conexion,(strip_tags($_POST["cedula"],ENT_QUOTES)));
		$correo=mysqli_real_escape_string($conexion,(strip_tags($_POST["correo"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($conexion,(strip_tags($_POST["telefono"],ENT_QUOTES)));
        $direccion=mysqli_real_escape_string($conexion,(strip_tags($_POST["direccion"],ENT_QUOTES)));
        
        
        
$cotizante = "UPDATE cotizante SET nombre='".$nombre."', apellido='".$apellido."',  cedula='".$cedula."',correo='".$correo."', telefono='".$telefono."', direccion='".$direccion."' WHERE id_cotizante=id_cotizante";
$query_update = $conexion-> query($cotizante);
			if ($query_update){
                echo '<script language="javascript">alert("Coizante Actualizado con Exito");window.location.href="../View/dashboard2/Cotizantes.php"</script>';
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		