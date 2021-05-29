<?php 

include ("conexion.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['apellido']) && !empty($_POST['apellido']) &&
	isset($_POST['rut']) && !empty($_POST['rut']) &&
	isset($_POST['email']) && !empty($_POST['email']) && 
	isset($_POST['password']) && !empty($_POST['password']) && 
	isset($_POST['fechanacimiento']) && !empty($_POST['fechanacimiento'])) {

	$conexion= mysqli_connect($host,$usuario,$clave,$db);

	mysqli_query($conexion,("INSERT INTO usuarios (nombre,apellido,rut,email,password,fechanacimiento) VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[rut]','$_POST[email]','$_POST[password]','$_POST[fechanacimiento]')"));

		header("location: ../home.php");
		
	}else{

		echo "error al insertar";

	}
?>