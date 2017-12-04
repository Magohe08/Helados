<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$comentario = $_POST['comentario'];
require_once'conexion.php';
$query = "INSERT INTO datos(nombre,correo,edad,comentario) VALUES ('$nombre','$correo','$edad','$comentario')";
if($db ->query($query)){
	echo "Es usuario se registro correctamente";
}
 ?>
