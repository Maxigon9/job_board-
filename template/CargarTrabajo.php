<?php
session_start();
$email = $_SESSION['Email'];
//echo $email;
//validamos datos del servidor
$user = "practica";
$pass = "j23unippt12";
$host = "localhost";

//conexion a la base de datos
$connection = mysqli_connect($host, $user, $pass);
//$consultas='SELECT ID FROM empresa where Email="$email";'



//CONSEGUIR ID DE EMPRESA

 $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

$consulta = "SELECT ID FROM empresa where Email='$email' ";
$resultado = mysqli_query($connection, $consulta);
foreach ($resultado as $valor) {

    $valor['ID'];


}




$id = implode($valor); //array a int 


$Titulo = $_POST["Titulo"];
$Descripcion = $_POST["Descripcion"];
$Pais = $_POST["Pais"];
$Ciudad = $_POST["Ciudad"];
$Provincia = $_POST["Provincia"];
$Nombre = $_POST["nombre"];
$area = $_POST["area"];
$Tipodeempleo = $_POST["Tipodeempleo"];
$Modalidad = $_POST["Modalidad"];
$Fecha = $_POST["Fecha"];

$datab = "practica_bolsadetrabajo";
//indicamos sellecionar a la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "no se ha podido encontrar la tabla";
} else {
    echo "<h3>tabla seleccionada:</h3>";



    //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
    $instruccion_SQL = "INSERT INTO `trabajos` (`ID_Trabajo`, `ID_Empresa`, `Sueldo`, `ID_Area`, `Fecha_Publicado`, `Tipo_puesto`, `Modalidad`, `Descripcion`, `Pais`, `Ciudad`, `Provincia`, `Titulo`, `Nombre_emp`)
    VALUES (NULL, '$id',NULL, '$area', '$Fecha', '$Tipodeempleo', '$Modalidad', '$Descripcion', '$Pais', '$Ciudad', '$Provincia', '$Titulo', '$Nombre')";
    $result = mysqli_query($conexion, $instruccion_SQL);
    // $consulta = "SELECT * FROM `trabajos`;";

    header("Location: ../trabajos.php");
}
// echo $Titulo;
// echo "---";
// echo $Descripcion;
// echo "---";
// echo $Pais;
// echo "---";
// echo $Ciudad;
// echo "---";
// echo $Provincia;
// echo "---";
// echo $Nombre ;
// echo "---";
// echo $area;
// echo "---";
// echo $Tipodeempleo;
// echo "---";
// echo $Modalidad;
// echo "---";
// echo $Fecha;
?>