<?php
$basico="C:/xampp/mysql/data/gestionando_n/";
//$target_file = basename($_FILES["archi"]["name"]);
$tmp_name = $_FILES["archi"]["tmp_name"];
$name = basename($_FILES["archi"]["name"]);
        move_uploaded_file($tmp_name, $basico.$name);
$f = mysqli_connect("", "root", "", "gestionando_n");

$sentencia="LOAD DATA INFILE '".$name."' INTO TABLE afiliacion CHARACTER SET UTF8 FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY '\"' LINES TERMINATED BY '\\n' (id_cotizante,id_ent,id_centro,total_pagar,id_estado)";

echo $sentencia;
$a=mysqli_query($f,$sentencia);
	
unlink($basico.$name);

?>