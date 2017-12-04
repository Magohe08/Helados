<?php 
	require_once('conexionhelados.php');
	$nombre=$_POST ['nombre'];
	$edad=$_POST ['edad'];
	$correo=$_POST ['correo'];
	$comen=$_POST ['comen'];

	$to_execute = "INSERT INTO comentarios (Nombre, Edad, Correo, Comentario) VALUES ('$nombre','$edad','$correo','$comen')";
	$db->query($to_execute);
	echo "Se guardo chido";
	?>

