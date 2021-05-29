<?php 
	require 'conexion.php';
	session_start();

	$email = $_POST['rut'];
	$password = $_POST['password'];
	$q="SELECT COUNT(*) as contar from usuarios where email = '$email' and password = '$password'";
	$consulta = mysqli_query($conexion,$q);
	$array = mysqli_fetch_array($consulta);
	if ($array['contar']>0) {
		header("location: ../home.php");
	}
?>