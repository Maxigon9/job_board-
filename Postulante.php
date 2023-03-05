<?php include("template/Cabecera.php") ?>
<div id="divPadre">

    <div class="col-md-10">

        <div class="card">
            <div class="card-header">
                <h1>Ingrese a su cuenta</h1>
            </div>

            <h5 class="card-header"> Información del usuario</h5>


            <form action="template/Validarusuario.php" name="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="text" class="form-control" name="Email" placeholder="Ingrese su email">
                </div>


                <div class="form-group">
                    <label for="contrasenia">Contraseña:</label>
                    <input type="password" class="form-control" name="contrasenia" placeholder="Ingrese su contraseña">
                </div>


                <br />

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="Accion" value="Ingresar" class="btn btn-success">Ingresar </button>

                </div>
            </form>

        </div>
    </div>

    <br />

    <div class="col-md-10">

        <div class="card">
            <div class="card-header">
                <h1> Registrarse</h1>
            </div>
            <h5 class="card-header"> Información de usuario</h5>
            <div class="card-body">

                <form method="POST" enctype="multipart/form-data" action="template\registrarPostulante.php">
                    <form action="postulante.php" name="" method="POST">
                        <div class="form-group">
                            <label for="Nombre">Nombre:</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre"
                                placeholder="Ingrese su nombre">
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" class="form-control" name="apellido" id="apellido"
                                placeholder="Ingrese su apellido">
                        </div>


                        <div class="col-md-15 pd0 mb15">
                            <!-- Fecha de nacimiento -->
                            <div class="col-md-6 fnac" id="fechaNacDatosWrap">
                                <label for="fechaNacimiento" class="required">Fecha de nacimiento</label>
                                <input type="date" name="fechanacimiento" required>
                            </div>




                            <div class="col-md-16 form-group">
                                <label class="required">Género</label>

                                <div class="select-wrap">
                                    <select id="genero" name="genero" required>
                                        <option value="">Seleccione una opcion</option>
                                        <option value="1">Femenino</option>
                                        <option value="2">Masculino</option>
                                        <option value="3">Otro</option>
                                    </select>

                                    <div class="select-arrow"></div>


                                </div>

                            </div>


                            <div class="col-md-6">
                                <label for="tipoDocumento">
                                    Tipo de documento
                                </label>

                                <div class="select-wrap">
                                    <select id="tipoDocumento" name="tipoDocumento" required>

                                        <option value="">Seleccione una opcion</option>

                                        <option value="1">Cedula de Identidad</option>

                                        <option value="2">L.E.</option>

                                        <option value="3">Pasaporte</option>

                                        <option value="4">L.C.</option>

                                        <option value="5">D.N.I.</option>

                                    </select>
                                    <div class="select-arrow"></div>
                                </div>

                            </div>



                            <div class="form-group">
                                <label for="Documento">Documento:</label>
                                <input type="text" class="form-control" name="DNI" id="DNI"
                                    placeholder="Ingrese documento">
                            </div>


                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="text" class="form-control" name="Email" placeholder="Ingrese su email">
                            </div>

                            <div class="form-group">
                                <label for="contrasenia">Contraseña:</label>
                                <input type="password" class="form-control" name="contrasenia"
                                    placeholder="Ingrese su contraseña">
                            </div>

                            <br />
                            <div class="btn-group" role="group" aria-label="">
                                <button type="submit" name="Accion" value="crear" class="btn btn-success">Crear
                                </button>

                            </div>
                        </div>
                    </form>
            </div>
        </div>


    </div>

</div>

<?php   include("template/pie.php") ?>
<?php   include("template/pie.php") ?>
<?php  include("pruebapie.html") ?>