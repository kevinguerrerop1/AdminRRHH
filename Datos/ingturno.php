<?php 

include ("conexion.php");

if (isset($_POST['id_usuario']) && !empty($_POST['id_usuario']) &&
	isset($_POST['id_horario']) && !empty($_POST['id_horario']) &&
	isset($_POST['fecha']) && !empty($_POST['fecha'])) {

	$conexion= mysqli_connect($host,$usuario,$clave,$db);

	mysqli_query($conexion,("INSERT INTO horarioasignado (id_usuario,id_horario,fecha) VALUES ('$_POST[id_usuario]','$_POST[id_horario]','$_POST[fecha]')"));
	
		echo "insertados correctamente";

	}else{

		echo "error al insertar";

	}
?>