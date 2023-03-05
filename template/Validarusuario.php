<?php
session_start();
$email = $_POST['Email'];
$contrasenia = $_POST['contrasenia'];

$_SESSION['Email'] = $email;

$conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

$consulta = "SELECT*FROM usuarios where email='$email' and contrasenia= '$contrasenia'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
  header("Location: ../index2.php");
  // header("location:inicio-usuario-reg.php");
} else {
?>
<?php
  // include("Postulante.php");
  echo '<script >
        alert("EL USUARIO INGRESADO NO EXISTE");
        window.location.href="https://practicasjuan23unisal.com.ar/bolsadetrabajo/Postulante.php";
       </script>';


         ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);