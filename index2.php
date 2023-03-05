<?php include("template/cabeceraregistrado.php") ?>

<?php
// session_start();
 $email = $_SESSION['Email'];
//echo $email;
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
$conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
$consulta = "SELECT area,ID FROM usuarios where Email='$email' ";
$resultado = mysqli_query($conexion, $consulta);
foreach ($resultado as $valor) {

  $area = $valor['area'];
  $id_usuario = $valor['ID'];

}

?>



<?php

?>

<?php if (!empty($area)) {


   //ENCUENTRO area DE USUARIO 
   $conecction = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
   $consultas = "SELECT area FROM usuarios where Email='$email'";
   $resultados = mysqli_query($conecction, $consultas);
   foreach ($resultados as $valor) {

     $valor['area'];
   }
   // $rows = $resultado->num_rows;
   $area = implode($valor);
   echo $area;
 ?>
<!-- DESDE ACA HACER MODIFICACIONES PARA EL FILTRO -->

<?php
   $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
   $consulta = "SELECT*FROM trabajos where ID_area='$area' ";
   $resultado = mysqli_query($conexion, $consulta);
   // $rows = $resultado->num_rows;
   //if($rows>0)	{
 
   foreach ($resultado as $valor) {
 ?>
<form method="POST" enctype="multipart/form-data" action="template\postulados.php">
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

      <!-- <p class="card-text" name= 'ID_empresa' value= > <?php //echo $valor['ID_Empresa'] ?>   </h4></p>

        <p class="card-text" name= 'ID_Trabajo'value= > <?php// echo $valor['ID_Trabajo'] ?>   </h4></p> -->
        <input type="hidden" class="form-control" name="id_empresa" value= "<?php echo $valor['ID_Empresa'] ?>" >
        <input type="hidden" class="form-control" name="id_trabajo" value="<?php echo $valor['ID_Trabajo'] ?>" >
        
        <?php
     $id_trabajo = $valor['ID_Trabajo'];
     $id_empresa = $valor['ID_Empresa'];
     $instruccion_SQL = "select * from postulados where id_postulante=" . $id_usuario . " and id_trabajo=" . $id_trabajo . " and id_empresa=" . $id_empresa;

     $connection = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
     $resultado = mysqli_query($connection, $instruccion_SQL);
     $filas = mysqli_num_rows($resultado);

     if ($filas == 0) {
        ?>
            <button type="submit" name="Accion" value="Postularse"   class="btn btn-success">Postularse </button>
          <?php
     }

          ?>

        </div>
       </div>
    </form>
    <?php
   }

    ?>

<?php

 } else {


   echo "Se recomienda cargar perfil para mejor filtro de busqueda";
 ?>
  


<?php
   $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
   $consulta = "SELECT*FROM trabajos";
   $resultado = mysqli_query($conexion, $consulta);
   // $rows = $resultado->num_rows;
//if($rows>0)	{
 
   foreach ($resultado as $valor) {
 ?>  
<div class="card border-primary mb-3" style="max-width: 80rem;">
<div class="card-header">Fecha: <?php echo $valor['Fecha_Publicado'] ?>  </div>
<div class="card-body">
<h4 class="card-title">  <?php echo $valor['Titulo'] ?>   </h4>
<p  class="card-text">  Empresa: <?php echo $valor['Nombre_emp'] ?>  </h4> </p>
<p class="card-text"> Modalidad: <?php echo $valor['Modalidad'] ?>   </h4></p>
<p class="card-text"> Ciudad: <?php echo $valor['Ciudad'] ?>   </h4></p>
<p class="card-text"><?php echo $valor['Descripcion'] ?>   </h4></p>

<a name="" id="" class="btn btn-primary" href="http://localhost/Bolsa_de_Trabajo/Postulante.php" role="button">Postularse</a>
</div>
</div>

<?php

   }



 ?>            

  

<?php
 }
 ?>




<?php include("template/pie.php") ?>
<?php include("pruebapie.html") ?>