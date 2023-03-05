<?php
session_start();
$email = $_SESSION['Email'];

//validamos datos del servidor
$user = "practica";
$pass = "j23unippt12";
$host = "localhost";

//CONSEGUIR ID DE EMPRESA

$conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

$id_trabajo = $_POST['id_trabajo'];
echo $id_trabajo;

//insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
$instruccion_SQL = "Delete From trabajos where ID_Trabajo=$id_trabajo  ";
$resultado = mysqli_query($conexion, $instruccion_SQL);



// include("Postulante.php");
echo '<script >
alert("Publicacion eliminada con exito");
window.location.href="http://localhost/Bolsa_de_Trabajo/Trabajosaborrar.php";
</script>';


?>