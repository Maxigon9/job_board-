<?php include("template/cabecera.php") ?>
<?php
if ($_POST) {

  $usuario = $_POST["Usuario"];
  $contraseña = $_POST["Contraseña"];

  //Sintaxis de conexión de la base de datos de muestra para PHP y MySQL.

  //Conectar a la base de datos

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bolsadetrabajo";
  $usertable = "usuarios";
  $yourfield = "nombre";

  $conexion = mysqli_connect($hostname, $username, $password);
  $db = mysqli_select_db($conexion, $dbname);


  //include_once("ingresar.php");

  //  $query = "SELECT * FROM personas where Contraseña='".$contraseña."' and Nombre='".$usuario."'";
  $query = "INSERT INTO `personas` (`Codigo`, `Nombre`, `Contraseña`, `email`) VALUES ('10', 'PRUBA 1', '1234', 'PRODANDOA@AA.COM')";
  echo $query;
  $result = mysqli_query($conexion, $query);
  $rows = $result->num_rows;
  if ($rows > 0) {
    if ($result)

      header('Location:existe.php');
  } else {

    header('Location:ingresar.php');
  }
} ?>


<?php


?>



<!doctype html>
<html lang="en">

<head>
  <title>Ingresar</title>

</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-md-4 ">


      </div>


      <div class="col-md-4">
        <br /> <br /> <br /> <br /> <br />

        <div class="card">
          <div class="card-header">

            <h3 style="text-align:center">Ingresá a tu cuenta</h3>

          </div>
          <div class="card-body">

            <form method="POST">

              <div class="form-group">
                <label>Usuario</label>

                <input type="text" class="form-control" name="Usuario" placeholder="Escribe tu usuario">

              </div>

              <div class="form-group">

                <label for="exampleInputPassword1">Contraseña:</label>
                <input type="password" class="form-control" name="Contraseña" placeholder="Escribe tu contraseña">
              </div>

              <br />

              <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>



          </div>

        </div>

      </div>

    </div>
  </div>


</body>

</html>




<?php include("template/pie.php") ?>