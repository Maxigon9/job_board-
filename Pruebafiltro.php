<?php include("template/cabeceraregistrado.php") ?>
<?php
//session_start();
$email = $_SESSION['Email'];
// echo $email;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSQUEDA</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>PRUEBA DE FILTROS DE BUSQUEDA</h4>
                    </div>
                </div>
            </div>
            <?php
            $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
            $consulta = "SELECT area,ID FROM usuarios where Email='$email' ";
            $resultado = mysqli_query($conexion, $consulta);
            foreach ($resultado as $valor) {

                //$area=$valor['area'] ;
                $id_usuario = $valor['ID'];

            }

            ?>

            <!-- Brand List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filtros
                                <button type="submit" class="btn btn-primary btn-sm float-end">Buscar</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>AREAS</h6>
                            <hr>
                            <?php
                            $con = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

                            $brand_query = "SELECT * FROM areas";
                            $brand_query_run = mysqli_query($con, $brand_query);

                            if (mysqli_num_rows($brand_query_run) > 0) {
                                foreach ($brand_query_run as $brandlist) {
                                    $checked = [];
                                    if (isset($_GET['nombre'])) {
                                        $checked = $_GET['nombre'];
                                    }
                            ?>
                            <div>
                                <input type="checkbox" name="nombre[]" value="<?= $brandlist['nombre']; ?>" <?php
                                    if (in_array($brandlist['nombre'], $checked)) {
                                        echo "checked";
                                    } ?>
                                />
                                <?= $brandlist['nombre']; ?>
                            </div>
                            <?php
                                }
                            } else {
                                echo "No Brands Found";
                            }
                                        ?>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php

                        if (isset($_GET['nombre'])) {
                            $branchecked = [];
                            $branchecked = $_GET['nombre'];

                            foreach ($branchecked as $rowbrand) {
                                echo $rowbrand;
                                $products = "SELECT * FROM trabajos WHERE ID_Area =('$rowbrand')";
                                $products_run = mysqli_query($con, $products);
                                if (mysqli_num_rows($products_run) > 0) {
                                    foreach ($products_run as $proditems):
                        ?>
                        <form method="POST" enctype="multipart/form-data" action="template\postulados.php">
                            <div class="col-md-15 mt-3">
                                <div class="border p-2">
                                    <h4>
                                    <?= $proditems['ID_Area']; ?>
                                    </h4>

                                    <div class="card border-primary mb-3" style="max-width: 80rem;">
                                        <div class="card-header">Fecha:
                                            <?php echo $proditems['Fecha_Publicado'] ?>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <?php echo $proditems['Titulo'] ?>
                                            </h4>
                                            <p class="card-text"> Empresa:
                                                <?php echo $proditems['Nombre_emp'] ?>
                                                </h4>
                                            </p>
                                            <p class="card-text"> Modalidad:
                                                <?php echo $proditems['Modalidad'] ?>
                                                </h4>
                                            </p>
                                            <p class="card-text"> Ciudad:
                                                <?php echo $proditems['Ciudad'] ?>
                                                </h4>
                                            </p>
                                            <p class="card-text">
                                                <?php echo $proditems['Descripcion'] ?>
                                                </h4>
                                            </p>
                                            <input type="hidden" class="form-control" name="id_empresa"
                                                value="<?php echo $proditems['ID_Empresa'] ?>">
                                            <input type="hidden" class="form-control" name="id_trabajo"
                                                value="<?php echo $proditems['ID_Trabajo'] ?>">
                                            <?php
                                        $id_trabajo = $proditems['ID_Trabajo'];
                                        $id_empresa = $proditems['ID_Empresa'];
                                        $instruccion_SQL = "select * from postulados where id_postulante=" . $id_usuario . " and id_trabajo=" . $id_trabajo . " and id_empresa=" . $id_empresa;

                                        $connection = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
                                        $resultado = mysqli_query($connection, $instruccion_SQL);
                                        $filas = mysqli_num_rows($resultado);

                                        if ($filas == 0) {
                                                                ?>
                                            <button type="submit" name="Accion" value="Postularse"
                                                class="btn btn-success">Postularse </button>
                                            <?php
                                        }

                                                                    ?>
                                            <!-- <a name="" id="" class="btn btn-primary" href="http://localhost/Bolsa_de_Trabajo/Postulante.php" role="button">Postularse</a> -->
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </form>
                        <?php
                                    endforeach;
                                }
                            }
                        } else {
                            $products = "SELECT * FROM trabajos ";
                            $products_run = mysqli_query($con, $products);
                            if (mysqli_num_rows($products_run) > 0) {
                                foreach ($products_run as $proditems):
                                            ?>
                        <form method="POST" enctype="multipart/form-data" action="template\postulados.php">
                            <div class="col-md-15 mt-3">
                                <div class="border p-2">
                                    <h6>
                                        <?= $proditems['ID_Area']; ?>
                                    </h6>
                                    <div class="card border-primary mb-3" style="max-width: 80rem;">
                                        <div class="card-header">Fecha:
                                            <?php echo $proditems['Fecha_Publicado'] ?>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <?php echo $proditems['Titulo'] ?>
                                            </h4>
                                            <p class="card-text"> Empresa:
                                                <?php echo $proditems['Nombre_emp'] ?>
                                                </h4>
                                            </p>
                                            <p class="card-text"> Modalidad:
                                                <?php echo $proditems['Modalidad'] ?>
                                                </h4>
                                            </p>
                                            <p class="card-text"> Ciudad:
                                                <?php echo $proditems['Ciudad'] ?>
                                                </h4>
                                            </p>
                                            <p class="card-text">
                                                <?php echo $proditems['Descripcion'] ?>
                                                </h4>
                                            </p>
                                            <input type="hidden" class="form-control" name="id_empresa"
                                                value="<?php echo $proditems['ID_Empresa'] ?>">
                                            <input type="hidden" class="form-control" name="id_trabajo"
                                                value="<?php echo $proditems['ID_Trabajo'] ?>">
                                            <?php
                                    $id_trabajo = $proditems['ID_Trabajo'];
                                    $id_empresa = $proditems['ID_Empresa'];
                                    $instruccion_SQL = "select * from postulados where id_postulante=" . $id_usuario . " and id_trabajo=" . $id_trabajo . " and id_empresa=" . $id_empresa;

                                    $connection = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
                                    $resultado = mysqli_query($connection, $instruccion_SQL);
                                    $filas = mysqli_num_rows($resultado);

                                    if ($filas == 0) {
                                                            ?>
                                            <button type="submit" name="Accion" value="Postularse"
                                                class="btn btn-success">Postularse </button>
                                            <?php
                                    }

                                                                    ?>
                                            <!-- <a name="" id="" class="btn btn-primary" href="http://localhost/Bolsa_de_Trabajo/Postulante.php" role="button">Postularse</a> -->
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                        <?php
                                endforeach;
                            } else {
                                echo "No Items Found";
                            }
                        }
                                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>



<?php include("template/pie.php") ?>
<?php  include("pruebapie.html") ?>