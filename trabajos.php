<?php include("template/CabeceraEmpresa.php") ?>
<?php
session_start();
$email = $_SESSION['Email'];
// echo $email;
?>
<div class="jumbotron">
  <h1 class="display-3">Bienvenidos</h1>
  <p class="lead">Bolsa de trabajo</p>
  <hr class="my-2">
  <p>Avisos mas relevantes</p>
  <!--  <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>-->
</div>

<?php
//ENCUENTRO area DE USUARIO 
$conecction = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
$consultas = "SELECT ID FROM empresa where Email='$email'";
$resultados = mysqli_query($conecction, $consultas);
foreach ($resultados as $valor) {

  $valor['ID'];
}
// $rows = $resultado->num_rows;
$ID = implode($valor);

?>


<?php
$conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
$consulta = "SELECT*FROM trabajos where ID_Empresa='$ID' ";
$resultado = mysqli_query($conexion, $consulta);
// $rows = $resultado->num_rows;
//if($rows>0)	{

foreach ($resultado as $valor) {
?>
<form method="POST" enctype="multipart/form-data" action="Postuladosempresa.php">
  <div class="card border-primary mb-3" style="max-width: 80rem;">
    <div class="card-header">Fecha:
      <?php echo $valor['Fecha_Publicado'] ?>
    </div>
    <div class="card-body">
      <h4 class="card-title">
        <?php echo $valor['Titulo'] ?>
      </h4>
      <p class="card-text"> Modalidad:
        <?php echo $valor['Modalidad'] ?>
        </h4>
      </p>
      <p class="card-text"> Ciudad:
        <?php echo $valor['Ciudad'] ?>
        </h4>
      </p>
      <p class="card-text">
        <?php echo $valor['Descripcion'] ?>
        </h4>
      </p>
      <p class="card-text" name='ID_empresa' value=>
        <?php echo $valor['ID_Empresa'] ?>
        </h4>
      </p>

      <p class="card-text" name='ID_Trabajo' value=>
        <?php echo $valor['ID_Trabajo'] ?>
        </h4>
      </p>
      <input type="hidden" class="form-control" name="id_empresa" value="<?php echo $valor['ID_Empresa'] ?>">
      <input type="hidden" class="form-control" name="id_trabajo" value="<?php echo $valor['ID_Trabajo'] ?>">

      <button type="submit" name="Accion" value="Postularse" class="btn btn-success">Ver Postulantes </button>

    </div>
  </div>
</form>
<?php

}



?>

<?php include("template/pie.php") ?>
<?php include("pruebapie.html") ?>

















<?php include("template/pie.php") ?>