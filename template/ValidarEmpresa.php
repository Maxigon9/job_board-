<?php
session_start();

$email = $_POST['Email'];
$contrasenia = $_POST['contrasenia'];

$_SESSION['Email'] = $email;
$conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

$consulta = "SELECT*FROM empresa where Email='$email' and contraseña= '$contrasenia'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
   header("Location: ../trabajos.php");
   // header("location:inicio-usuario-reg.php");
} else {
?>
<?php
   echo '<script >
     alert("EL USUARIO INGRESADO NO EXISTE");
     window.location.href="https://practicasjuan23unisal.com.ar/bolsadetrabajo/Empresa.php";
    </script>';
         ?>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);