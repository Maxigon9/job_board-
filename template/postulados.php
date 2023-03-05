<?php
session_start();
$email = $_SESSION['Email'];
echo $email;
//validamos datos del servidor
$user = "practica";
$pass = "j23unippt12";
$host = "localhost";

//conexion a la base de datos
$connection = mysqli_connect($host, $user, $pass);
//$consultas='SELECT ID FROM empresa where Email="$email";'



//CONSEGUIR ID DE EMPRESA

$conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

$consulta = "SELECT ID FROM usuarios where Email='$email' ";
$resultado = mysqli_query($conexion, $consulta);
foreach ($resultado as $valor) {

    $valor['ID'];


}

$id_usuario = implode($valor);

echo $id_usuario;


$id_empresa = $_POST['id_empresa'];
$id_trabajo = $_POST['id_trabajo'];

echo $id_empresa;
echo $id_trabajo;
$datab = "practica_bolsadetrabajo";
//indicamos sellecionar a la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "no se ha podido encontrar la tabla usuarios";
} else {
    echo "<h3>tabla seleccionada:</h3>";
}


//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "INSERT INTO postulados (`id_postulante`,`id_trabajo`,`id_empresa`)
    VALUES ('$id_usuario','$id_trabajo', '$id_empresa')";
$resultado = mysqli_query($connection, $instruccion_SQL);
$consulta = "SELECT * FROM `postulados;";

header("Location: ../index2.php");



?>