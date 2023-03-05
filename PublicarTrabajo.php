<?php include("template/CabeceraEmpresa.php") ?>
<?php session_start(); ?>


Bienvenido:
<?php $email = $_SESSION['Email'];
echo $email;
?>

<div class="col-md-100">

    <div class="card">
        <div class="card-header">
            <h1>Publicar Trabajo</h1>
        </div>


        <div class="card-body">

            <form action="template/CargarTrabajo.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="Titulo">Puesto/Titulo</label>
                    <input type="text" class="form-control" name="Titulo" placeholder="Ingrese el Puesto/Titulo buscado"
                        required>
                </div>

                <div class="form-group">
                    <label for="Descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="Descripcion"
                        placeholder="Ingrese  Descripcion del Puesto" required>
                </div>


                <div class="form-group">
                    <label for="Pais">Pais</label>
                    <input type="text" class="form-control" name="Pais" placeholder="Ingrese el Pais " required>
                </div>

                <div class="form-group">
                    <label for="Ciudad">Ciudad:</label>
                    <input type="text" class="form-control" name="Ciudad" placeholder="Ingrese su Ciudad" required>
                </div>

                <br />
                <div class="form-group">
                    <label for="Provincia">Provincia</label>
                    <input type="text" class="form-control" name="Provincia" placeholder="Ingrese Provincia" required>
                </div>

                <div class="form-group">
                    <label for="Nombre">Nombre de la Empresa:</label>
                    <?php

                    $conecction = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
                    $consultas = "SELECT nombre FROM empresa where Email='$email'";
                    $resultados = mysqli_query($conecction, $consultas);
                    foreach ($resultados as $valor) {

                        $valor['nombre'];
                    }
                    // $rows = $resultado->num_rows;
                    $nombre = implode($valor);

                    ?>
                    <!-- <input   type="text" class="form-control" name="Nombre"   > -->
                    <input type="text" value="<?php echo $valor['nombre'] ?>" class="form-control" name="nombre"
                        placeholder="Ingrese la nombre" required>
                </div>



                <label for="area" name="area" class="required">Área de Puesto</label>
                <div class="select-wrap">
                    <select id="area" name="area" class="form-control" style="opacity: 1;" required>


                        <?php
                        $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
                        $consulta = "SELECT*FROM areas ";
                        $resultado = mysqli_query($conexion, $consulta);
                        // $rows = $resultado->num_rows;
                        //if($rows>0)	{
                        
                        foreach ($resultado as $valor) {
                        ?>
                        <option id="<?php echo $valor['id'] ?>" selected>
                            <?php echo $valor['nombre'] ?>
                        </option>

                        <?php

                        }
                        ?>

                    </select>
                    <div class="select-arrow"></div>
                </div><!-- select-wrap -->


                <div class="col-md-12">
                    <label for="Tipodeempleo" name="Tipodeempleo" class="required">Tipo de empleo </label>
                    <div class="select-wrap">
                        <select id="Tipodeempleo" name="Tipodeempleo" class="form-control" style="opacity: 1;" required>

                            <?php
                            $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
                            $consulta = "SELECT*FROM tipodeempleo ";
                            $resultado = mysqli_query($conexion, $consulta);
                            foreach ($resultado as $valor) {
                            ?>
                            <option id="<?php echo $valor['id_Templeo'] ?>" selected>
                                <?php echo $valor['nombre'] ?>
                            </option>

                            <?php
                            }
                            ?>
                        </select>
                        <div class="select-arrow"></div>
                    </div><!-- select-wrap -->

                    <br />

                    <div class="col-md-12">
                        <label for="Modalidad" name="Modalidad" class="required">Modalidad </label>
                        <div class="select-wrap">
                            <select id="Modalidad" name="Modalidad" class="form-control" style="opacity: 1;" required>

                                <?php
                                $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
                                $consulta = "SELECT*FROM modalidadtrabajo ";
                                $resultado = mysqli_query($conexion, $consulta);
                                foreach ($resultado as $valor) {
                                ?>
                                <option id="<?php echo $valor['id_modalidad'] ?>" selected>
                                    <?php echo $valor['Modalidad'] ?>
                                </option>

                                <?php
                                }
                                ?>
                            </select>
                            <div class="select-arrow"></div>
                        </div><!-- select-wrap -->


                        <!-- SOLO PARA PROBAr ID -->
                        <div class="col-md-12">
                            <label for="Modalidad" name="Modalidad" class="required">ID</label>
                            <?php

                            $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

                            $consulta = "SELECT ID FROM empresa where Email='$email' ";
                            $resultado = mysqli_query($conexion, $consulta);
                            foreach ($resultado as $valor) {
                            ?>
                            <?php echo $valor['ID'] ?>

                            <?php
                            }
                            ?>

                        </div>

                        <br />
                        <label for="start">Fecha de Publicacion:</label>

                        <input type="date" id="Fecha" name="Fecha" value="2020-10-22" min="2018-01-01" max="2040-12-31">

                        <br />
                        <br />
                        <div class="btn-group" role="group" aria-label="">
                            <br />
                            <button type="submit" class="btn btn-primary">Publicar aviso</button>

                        </div>
            </form>
        </div>
    </div>



    <br />
</div>

<?php include("template/pie.php") ?>


<?php   include("template/pie.php") ?>
<?php  include("pruebapie.html") ?>
