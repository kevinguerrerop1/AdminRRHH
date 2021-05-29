<?php 

include ("conexion.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['hem']) && !empty($_POST['hem']) &&
	isset($_POST['hsm']) && !empty($_POST['hsm']) &&
	isset($_POST['het']) && !empty($_POST['het']) &&
	isset($_POST['hst']) && !empty($_POST['hst'])) {

	$conexion= mysqli_connect($host,$usuario,$clave,$db);

	mysqli_query($conexion,("INSERT INTO horarios (nombre_h,hem,hsm,het,hst) VALUES ('$_POST[nombre]','$_POST[hem]','$_POST[hsm]','$_POST[het]','$_POST[hst]')"));

		header("location: ../home.php");
	}else{
		echo "error al insertar";
	}
?>