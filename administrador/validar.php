<?php

if($_POST){
 //   header('Location:Inicio.php');
//echo "aca";
$usuario=$_POST["Usuario"];
$contraseña=$_POST["Contraseña"];
include_once("config/bd.php");
$query = "SELECT * FROM personas where Contraseña='".$contraseña."' and Nombre='".$usuario."'";
echo $query;
$result = mysqli_query($conexion,$query);
    $rows = $result->num_rows;
    if($rows>0)	{
//	if ($result)

		header('Location:Inicio.php');
	}
	else
	{
		
		header('Location:index.php');
	}
}
?>