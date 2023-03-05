<?php
//Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.

//Conectar a la base de datos

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "prueeba";
$usertable = "personas";
$yourfield = "nombre";

//$conexion = mysqli_connect($hostname,$username, $password) ;
$db = new mysqli_select_db($conexion, $dbname);

//	$query = "SELECT * FROM personas where contraseña=contraseña, usuario=usuario ";
//$query = "INSERT INTO `personas` (`Codigo`, `Nombre`, `Contraseña`, `email`) VALUES ('10', 'PRUBA 1', '1234', 'PRODANDOA@AA.COM')";
//	$result = mysqli_query($conexion,$query);

//	if($result){
//		while($row = mysqli_fetch_array($result)){
//			$name = $row[1];
//			echo "Nombre: ".$name."<br/>";
//		}
//	}
?>