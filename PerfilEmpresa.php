<?php   include("template/CabeceraEmpresa.php") ?>
<?php

session_start();


?>
<h1> Bienvenido:
    <?php  $email=$_SESSION['Email'];
echo $email;
?>
</h1>
<?php 


   $conexion=mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

    $consulta="SELECT*FROM empresa where Email='$email'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

  
     if($filas) { 
        foreach ($resultado as $valor)
     ?>

<div class="col-md-9">

    <div class="card">
        <div class="card-header">
            <h1> Perfil empresa</h1>
        </div>
        <h5 class="card-header"> Información de la empresa</h5>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data" action="template\registrarEmpresa.php">

                <div class="form-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" value="<?php echo $valor['Nombre'] ?>" class="form-control" name="Nombre"
                        id="Nombre" placeholder="Ingrese el nombre de la empresa" required>
                </div>

                <div class="form-group">
                    <label for="TipoEmpresa">Tipo de Empresa:</label>
                    <input type="text" value="<?php echo $valor['Tipo Empresa'] ?>" class="form-control"
                        name="TipoEmpresa" id="TipoEmpresa" placeholder="Ingrese su Tipo de empresa">
                </div>

                <div class="form-group">
                    <label for="Telefono">Telefono:</label>
                    <input type="text" value="<?php echo $valor['Telefono'] ?>" class="form-control" name="Telefono"
                        id="Telefono" placeholder="Ingrese nro de telefono">
                </div>

                <div class="form-group">
                    <label for="Domicilio">Domicilio:</label>
                    <input type="text" value="<?php echo $valor['Domicilio'] ?>" class="form-control"
                        name="Domicilio" id="Domicilio" placeholder="Ingrese su domicilio">
                </div>

                <div class="form-group">
                    <label for="RedSocial">Redes Sociales:</label>
                    <input type="text" value="<?php echo $valor['Red Social'] ?>" class="form-control"
                        name="RedSocial" id="RedSocial" placeholder="Ingrese red social">
                </div>

                <br />
                <!-- <div class="btn-group" role="group" aria-label="">
                    <button type="submit" class="btn btn-primary">Grabar cambios</button> -->

                    <!-- a implementar -->

                </div>
            </form>

            <!--Aca abajo corresponde a mostrar los trabajos cargados-->




        </div>
    </div>


</div>


<?php

        // header("location:inicio-usuario-reg.php");
     }else{
         ?>
<?php<
        include("Empresa.php");
         ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
    }  

    
?>





</table>
</body>

</html>