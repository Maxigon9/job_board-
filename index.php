<?php include("template/Cabecera.php") ?>


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
$conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
$consulta = "SELECT*FROM trabajos";
$resultado = mysqli_query($conexion, $consulta);
// $rows = $resultado->num_rows;
//if($rows>0)	{

foreach ($resultado as $valor) {
?>
<div class="card border-primary mb-3" style="max-width: 80rem;">
  <div class="card-header">Fecha:
    <?php echo $valor['Fecha_Publicado'] ?>
  </div>
  <div class="card-body">
    <h4 class="card-title">
      <?php echo $valor['Titulo'] ?>
    </h4>
    <p class="card-text"> Empresa:
      <?php echo $valor['Nombre_emp'] ?>
      </h4>
    </p>
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

    <a name="" id="" class="btn btn-primary" href="https://practicasjuan23unisal.com.ar/bolsadetrabajo/PROBAR.PHP"
      role="button">Postularse</a>

  </div>
</div>

<?php

}



?>
<?php include("template/pie.php") ?>
<?php include("pruebapie.html") ?>