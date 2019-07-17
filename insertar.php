<?php

	include("conexion.php");
	if(isset($_POST['alumno'])&& !empty($_POST['alumno'])&&isset($_POST['email']) && !empty($_POST['email']))
	{	
		$con=mysqli_connect($host,$user,$pw,$db);
		mysqli_query($con,("INSERT INTO clientes(nombre,correo) VALUES ('$_POST[alumno]','$_POST[email]')"));
		echo "datos insertados";
	}
	else
	{
		echo "error al insertar datos";
	}
?>