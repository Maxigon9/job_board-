<?php

//validamos datos del servidor
$user ="practica";
$pass ="j23unippt12";
$host ="localhost";

//conexion a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//Llamado al input del form
$nombre = $_POST["Nombre"];
$apellido = $_POST["apellido"];
$fecha = $_POST["fechanacimiento"];
$email = $_POST["Email"];
$genero = $_POST["genero"];
$documento = $_POST["DNI"];
$contrasenia = $_POST["contrasenia"];


session_start();
$_SESSION['Email'] = $email;
//indicamos el nombre de la base
$datab ="practica_bolsadetrabajo";
//indicamos sellecionar a la base de datos
$db = mysqli_select_db($connection, $datab);

$very = mysqli_query($connection, "select * from usuarios where Email='$email'");
if (mysqli_num_rows($very) != 0) {



    echo '<script >
     alert("EL USUARIO INGRESADO YA EXISTE");
     window.location.href="http://localhost/Bolsa_de_Trabajo/Postulante.php";
    </script>';

} else {
    //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
    $instruccion_SQL = "INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido`, `Email`, `Contrasenia`, `D.N.I`, `Fecha de nacimiento`, `Genero`)
    VALUES (NULL, '$nombre', '$apellido', '$email', '$contrasenia', '$documento', '$fecha', '$genero')";
    $resultado = mysqli_query($connection, $instruccion_SQL);
    //$consulta = "SELECT * FROM `usuarios`;";



    header("Location: ../index2.php");
}


?>