<?php

session_start();
$email = $_SESSION['Email'];
//validamos datos del servidor

$user = "practica";
$pass = "j23unippt12";
$host = "localhost";

//conexion a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//Llamado al input del form
$telefono = $_POST["telefono"];
$telefono2 = $_POST["telefono2"];
$provincia = $_POST["provincia"];
$codigopostal = $_POST["codigopostal"];
$localidad = $_POST["localidad"];
$calle = $_POST["calle"];
$numero = $_POST["numero"];

$Tipodeestudios = $_POST["Tipodeestudios"];
$estado = $_POST["estado"];
$area = $_POST["area"];
$Titulo = $_POST["Titulo"];

//$tipoestudio = $_POST["tipoestudio"];
//$estado = $_POST["estado"];
//$area = $_POST["area"];
//$titulo = $_POST["txttitulo"];
if (!$connection) {
    echo "No se ha podido conectar con el servidor" . mysql_error();
} else {
    echo "<b><h3>Hemos conectado al servidor</h3></b>";
}


//indicamos el nombre de la base
$datab = "practica_bolsadetrabajo";
//indicamos sellecionar a la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$datab) {
    echo "no se ha podido encontrar la tabla usuarios";
} else {
    echo "<h3>tabla seleccionada:</h3>";

    //echo $_SESSION['email'] ;
    header("Location: ../index2.php");
}




$instruccion_SQL = "UPDATE usuarios SET telefono=$telefono ,telefono2=$telefono2,Provincia='$provincia',codigopostal=$codigopostal,localidad='$localidad',calle='$calle',numero=$numero,Tipodeestudios='$Tipodeestudios',estado='$estado',area='$area',Titulo='$Titulo'  WHERE Email LIKE '$email'";

$resultado = mysqli_query($connection, $instruccion_SQL);

if ($resultado) {
    echo "     Registro actualizado con exito";
} else {
    echo "Ocurrio un error en la actualizacion.<br/>";
}




?>