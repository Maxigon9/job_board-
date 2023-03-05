<?php include("template/Cabecera.php") ?>
<div id="divPadre">
    <div class="col-md-9">

        <div class="card">
            <div class="card-header">
                <h1>Ingresá a tu cuenta</h1>
            </div>


            <div class="card-body">

                <form action="template/ValidarEmpresa.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" name="Email"
                            placeholder="Ingrese el Email de la empresa">
                    </div>

                    <div class="form-group">
                        <label for="contrasenia">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasenia"
                            placeholder="Ingrese su contraseña">
                    </div>

                    <br />

                    <div class="btn-group" role="group" aria-label="">
                        <br />
                        <button type="submit" class="btn btn-primary">Ingresar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <br />


    <div class="col-md-9">

        <div class="card">
            <div class="card-header">
                <h1> Registrar empresa</h1>
            </div>
            <h5 class="card-header"> Información de la empresa</h5>
            <div class="card-body">

                <form method="POST" enctype="multipart/form-data" action="template\registrarEmpresa.php">

                    <div class="form-group">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre"
                            placeholder="Ingrese el nombre de la empresa">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email empresa:</label>
                        <input type="text" class="form-control" name="Email" id="Email"
                            placeholder="Ingrese email de la empresa">
                    </div>

                    <div class="form-group">
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" class="form-control" name="contraseña" id="contraseña"
                            placeholder="Ingrese su Contraseña">
                    </div>

                    <div class="form-group">
                        <label for="TipoEmpresa">Tipo de Empresa:</label>
                        <input type="text" class="form-control" name="TipoEmpresa" id="TipoEmpresa"
                            placeholder="Ingrese su Tipo de empresa">
                    </div>

                    <div class="form-group">
                        <label for="cuit">Cuit:</label>
                        <input type="text" class="form-control" name="cuit" id="cuit"
                            placeholder="Ingrese Cuit de empresa">
                    </div>

                    <div class="form-group">
                        <label for="Telefono">Telefono:</label>
                        <input type="text" class="form-control" name="Telefono" id="Telefono"
                            placeholder="Ingrese nro de telefono">
                    </div>

                    <div class="form-group">
                        <label for="Domicilio">Domicilio:</label>
                        <input type="text" class="form-control" name="Domicilio" id="Domicilio"
                            placeholder="Ingrese su domicilio">
                    </div>

                    <div class="form-group">
                        <label for="RedSocial">Redes Sociales:</label>
                        <input type="text" class="form-control" name="RedSocial" id="RedSocial"
                            placeholder="Ingrese red social">
                    </div>

                    <br />
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" class="btn btn-primary">Registrarse</button>

                    </div>
                </form>
            </div>
        </div>


    </div>
</div>



<?php include("template/pie.php") ?>
<?php include("pruebapie.html") ?>