<?php

include("template/CabeceraEmpresa.php");
?>
<div class="jumbotron">
    <h1 class="display-3">Bienvenido</h1>
    <p class="lead">Bolsa de trabajo</p>
    <hr class="my-2">
    <p>Lista de Postulados</p>
    <!--  <p class="lead">
     <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
 </p>-->
</div>
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

$id_empresa = $_POST['id_empresa'];
$id_trabajo = $_POST['id_trabajo'];

// echo $id_empresa;
// echo $id_trabajo;
$datab = "practica_bolsadetrabajo";
//indicamos sellecionar a la base de datos
$db = mysqli_select_db($connection, $datab);

if (!$db) {
    echo "no se ha podido encontrar la tabla usuarios";
} else {
    //echo "<h3>tabla seleccionada:</h3>";
}
    //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
    $instruccion_SQL = "select id_postulante, Email, Nombre,Tipodeestudios, Estado, area, Titulo from postulados, usuarios where id_empresa=" . $id_empresa . " and id_trabajo=" . $id_trabajo . " and Usuarios.ID=id_postulante";
    $resultado = mysqli_query($connection, $instruccion_SQL);
    foreach ($resultado as $valor) {

?>
<div class="card border-primary mb-3" style="max-width: 80rem;">
    <div class="card-header">Informacion de contacto de usuario postulado </div>
    <div class="card-body">
        <h4 class="card-title">
            <?php echo $valor['Nombre'] ?>
        </h4>
        <!-- <p  class="card-text">  ID: <?php //echo $valor['id_postulante']?>  </h4> </p> -->
     <p class="card-text"> Email : <?php echo $valor['Email'] ?>   </h4></p>
     <p  class="card-text">  Tipodeestudios: <?php echo $valor['Tipodeestudios'] ?>  </h4> </p>
     <p class="card-text"> Estado : <?php echo $valor['Estado'] ?>   </h4></p>
     <p  class="card-text">  Area: <?php echo $valor['area'] ?>  </h4> </p>
     <p class="card-text"> Titulo: <?php echo $valor['Titulo'] ?>   </h4></p>
    </div>
  </div>

<?php
        //        echo $valor['id_postulante'] ;
//     echo $valor['Email'];
//  echo ".........   "   ;

    }


    include("template/pie.php");
?>
