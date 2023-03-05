<?php include("template/cabeceraregistrado.php") ?>
<?php
//session_start();
?>


<h1> Bienvenido:
	<?php $email = $_SESSION['Email'];
    echo $email;
    ?>
</h1>

<?php 
//foreach ($link->query('SELECT*FROM empresa where Email="$email"') as $row){ ?

  $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");

    $consulta="SELECT*FROM usuarios where Email='$email'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

  
     if($filas) { 
        foreach ($resultado as $valor)
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title id=¨titulo¨>Perfil</title>

</head>

<body>
	<div id="divPadre">

		<h1>Perfil</h1>
		<div class="col-xs-4 col-md-10 cv-content">
			<div class="section-wrap foto" id="datos-personales">
				<div class="card cv-card_edit datos-personales-card">
					<label class="change-avatar_trigger" for="avatarTrigger">

						<div id="upload-avatar">
							<img src="img/perfil.png" alt="PERFIL" style="width: 110px;px;height:110px;    ">
						</div>

						<div class="cargar">CARGAR IMAGEN</div>
					</label>

					<!-- <div class="image-test"></div> 
			<input type="file" id="avatarTrigger"  accept=".jpg" > -->


					<div class="cv-form">
						<h3>DATOS DE CONTACTO</h3>
						<form method="POST" enctype="multipart/form-data" action="template\cargarperfil.php">

							<div class="col-md-15 pd0 mb15">
								<div class="col-md-6">
									<label for="telefono" class="required">Telefono1</label>

									<input type="text" value="<?php echo $valor['Telefono'] ?>" class="form-control"
										name="telefono" placeholder="Ingrese el telefono" required>
								</div>

								<div class="col-md-6">
									<label for="telefono2" class="required">Telefono 2</label>

									<input type="text" value="<?php echo $valor['Telefono2'] ?>" class="form-control"
										name="telefono2" placeholder="Ingrese el telefono 2" required>
								</div>


								<div class="col-md-6">
									<label for="provincia" class="required">Provincia</label>

									<input type="text" value="<?php echo $valor['Provincia'] ?>" class="form-control"
										name="provincia" placeholder="Ingrese la Provincia" required>
								</div>

								<div class="col-md-6">
									<label for="codigopostal" class="required">Codigo postal</label>

									<input type="text" value="<?php echo $valor['codigopostal'] ?>" class="form-control"
										name="codigopostal" placeholder="Ingrese el CP" required>
								</div>


								<div class="col-md-6">
									<label for="localidad" class="required">Localidad</label>

									<input type="text" value="<?php echo $valor['Localidad'] ?>" class="form-control"
										name="localidad" placeholder="Ingrese la localidad" required>
								</div>

								<div class="col-md-6">
									<label for="calle" class="required">Calle</label>

									<input type="text" value="<?php echo $valor['Calle'] ?>" class="form-control"
										name="calle" placeholder="Ingrese la calle" required>
								</div>

								<div class="col-md-6">
									<label for="numero" class="required">Numero de casa / Piso </label>
									<input type="text" value="<?php echo $valor['Numero'] ?>" class="form-control"
										name="numero" placeholder="Ingrese el numero de casa" required>
								</div>

								</br>




								</br>

								<h3>ESTUDIOS</h3>

								<div class="col-md-15 pd0 mb15">

									<div class="col-md-15 pd0 mb15">
										<div class="col-md-12">
											<label for="Tipodeestudios" class="required">Tipo de estudio</label>
											<div class="select-wrap">
												<select id="Tipodeestudios" name="Tipodeestudios"   class="form-control">

													<option id="1"  <?php if ($valor['Tipodeestudios']=="Secundario") {echo "selected";} ?>>Secundario</option>

													<option id="2" <?php if ($valor['Tipodeestudios']=="Terciario") {echo "selected";} ?>> Terciario</option>

													<option id="3" <?php if ($valor['Tipodeestudios']=="Universitario") {echo "selected";} ?>> Universitario</option>

													<option id="4" <?php if ($valor['Tipodeestudios']=="Posgrado") {echo "selected";} ?>>Posgrado</option>

													<option id="5" <?php if ($valor['Tipodeestudios']=="Master") {echo "selected";} ?>>Master</option>

													<option id="6" <?php if ($valor['Tipodeestudios']=="Doctorado") {echo "selected";} ?>>Doctorado</option>
													
												</select>
												
												<div class="select-arrow"></div>

											</div>
											<div class="col-md-12">
												<label for="estado" class="required">Estado</label>
												<div class="select-wrap">
													<select id="estado" name="estado" class="form-control"required>


														<option id="1" <?php if ($valor['Estado']=="En Curso") {echo "selected";} ?>>En Curso</option>

														<option id="2" <?php if ($valor['Estado']=="Graduado") {echo "selected";} ?>>Graduado</option>

														<option id="3" <?php if ($valor['Estado']=="Abandonado") {echo "selected";} ?>>Abandonado</option>

													</select>
													<div class="select-arrow"></div>

												</div>
											</div>


											</br>


											<div class="col-md-6">
												<label for="Titulo" class="required">Titulo / Carrera</label>
												<input type="text" class="form-control"  value="<?php echo $valor['Titulo'] ?>"name="Titulo"
													placeholder="Ingrese el Titulo" required>

											</div>

										</div>
										<div class="col-md-12">

											<label for="area" name="area " class="required">Área de estudio</label>
											<div class="select-wrap">
											
											<select id="area" name="area" class="form-control" style="opacity: 1;"
													required>


													<?php
                                                    $conexion = mysqli_connect("localhost", "practica", "j23unippt12", "practica_bolsadetrabajo");
                                                    $consulta = "SELECT*FROM areas ";
                                                    $resultado = mysqli_query($conexion, $consulta);
                                                    // $rows = $resultado->num_rows;
                                                    //if($rows>0)	{

														foreach ($resultado as $valor1) {
													
                                                    ?>
													
													<option id="<?php echo $valor1['id'] ?>"  <?php if ($valor['area']==$valor1['nombre']) {echo "selected";} ?>>
														<?php echo $valor1['nombre'] ?>
													</option>

													<?php

                                                    }
                                                    ?>

												</select>
												<div class="select-arrow"></div>
											</div><!-- select-wrap -->


											<div class="col-md-6">




											</div>
											</br>

											</br>
											<div class="btn-group" role="group" aria-label="">
												<button type="submit" class="btn btn-primary">Actualizar/cargar Datos</button>
											</div>


											</br>
											</br>


										</div>

									</div>



									<!-- </br>
									<div class="cv-form">
										<h4>Cargar CV</h4>
										<div class="col-md-12 pd0 mb15">

											<div class="col-md-12 pd0 mb15">

												<div class="col-md-6">
													<input type="file" id="CV">
												</div>
											</div> -->
						</form>


	



					</div>
				</div>

				</form>
				<?php

// header("location:inicio-usuario-reg.php");
}else{
 ?>
<?php<
include("postulante.php");
 ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}  

//}
?>
			</div>
		</div>
	</div>


</body>
</br>

</html>
<?php include("template/pie.php") ?>
<?php include("template/pie.php") ?>
<?php include("template/pie.php") ?>
<?php include("template/pie.php") ?>
<?php include("template/pie.php") ?>
<?php include("pruebapie.html") ?>