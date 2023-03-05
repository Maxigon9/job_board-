<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$email = $_SESSION['Email'];
// echo $email;
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolsa de Trabajo</title>

  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand">Bolsa de Trabajo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index2.php">Inicio
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="ContactoPost.php">Contacto</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="QuienessomosPost.php">¿Quienes somos?</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php echo $email ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
              <a class="dropdown-item" href="Perfil.php">Cargar Perfil</a>
              <a class="dropdown-item" href="Cerrarsesion.php">Cerrar Sesion</a>
            </div>
          </li>
        </ul>

        <!-- 
        <li class="nav-item ">
          <a class="nav-link"  href="perfil.php" >Perfil</a>
          </li> -->

        <!-- <li class="nav-item ">
          <a class="nav-link" href="Cerrarsesion.php">Cerrar Sesion</a>
        </li> -->
      

        <form class="d-flex">
          <a name="" id="" class="btn btn-primary" href="https://practicasjuan23unisal.com.ar/bolsadetrabajo/Pruebafiltro.php"
            role="button">Buscar por area</a>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <br />
    <div class="row">

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>