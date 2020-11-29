<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	require 'conexion.php';
	
	$sqlConf = "SELECT * FROM configuracion";
	$resultConf = $mysqli->query($sqlConf);
	$row = $resultConf->fetch_assoc();

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';//Modificar
	$mail->Host =  $row['host'];//Modificar
	$mail->Port = $row['puerto'];//Modificar
	$mail->Username = $row['email_emisor']; //Modificar
	$mail->Password = $row['password']; //Modificar
	
	$mail->setFrom($row['email_emisor'], 'Gestionando S.A.S');//Modificar
	
	$sqlReceptor = "SELECT * FROM contactos";
	$resultReceptor = $mysqli->query($sqlReceptor);

	while($row_receptor = $resultReceptor->fetch_assoc()){
		$correo_receptor = $row_receptor['email'];
			$receptor = $row_receptor['nombre'];

	$mail->addAddress($correo_receptor, $receptor);//Modificar
	
	$mail->Subject = $row['asunto'];//Modificar
	$mail->Body = $row['cuerpo']; //Modificar
	$mail->IsHTML(true);
	
	if($mail->send()){
		header("location: ../pncumplidos.php");
		} else {
		echo 'Error';
	}
}
?>