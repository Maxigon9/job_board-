<?php

//validamos datos del servidor
$user = "practica";
$pass = "j23unippt12";
$host = "localhost";

//conexion a la base de datos
$connection = mysqli_connect($host, $user, $pass);

//Llamado al input del form
$nombre = $_POST["Nombre"];
$domicilio = $_POST["Domicilio"];
$telefono = $_POST["Telefono"];
$email = $_POST["Email"];
$cuit = $_POST["cuit"];
$tipoempresa = $_POST["TipoEmpresa"];
$contrasenia = $_POST["contraseña"];
$redsocial = $_POST["RedSocial"];

session_start();
$_SESSION['Email'] = $email;
//indicamos el nombre de la base
$datab = "practica_bolsadetrabajo";
//indicamos sellecionar a la base de datos
$db = mysqli_select_db($connection, $datab);

$very = mysqli_query($connection, "select * from empresa where Email= '$email'");
if (mysqli_num_rows($very) != 0) {



    echo '<script >
     alert("EL USUARIO INGRESADO YA EXISTE");
     window.location.href="http://localhost/Bolsa_de_Trabajo/Empresa.php";
    </script>';

} else {
    // if (!$db) {
//     echo "no se ha podido encontrar la tabla usuarios";
// } else {
//     echo "<h3>tabla seleccionada:</h3>";
// }
//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
    $instruccion_SQL = "INSERT INTO empresa (`Nombre`, `Cuit`, `Tipo Empresa`, `Domicilio`, `Telefono`, `Email`, `Contraseña`, `Red Social`)
                        VALUES ('$nombre', '$cuit', '$tipoempresa', '$domicilio', $telefono, '$email', '$contrasenia' , '$redsocial')";
    $resultado = mysqli_query($connection, $instruccion_SQL);



   header("Location: ../trabajos.php"); 
}
?>

