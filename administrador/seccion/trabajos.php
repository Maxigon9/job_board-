<?php include("../template/cabecera.php");   ?>

<?php 
print_r($_POST);

print_r($_FILES);

?>


<div class="col-md-5"> 

    <div class="card">
        <div class="card-header">
            Datos del Trabajo
        </div>

        <div class="card-body">
            
        <form method= "POST" enctype="multipart/form-data" >

                <div class = "form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID"  placeholder="ID">
                </div>

                <div class = "form-group">
                    <label for="txtTrabajo">Trabajo:</label>
                    <input type="text" class="form-control" name="txtTrabajo" id="txtTrabajo"  placeholder="Trabajo">
                </div>

                <div class = "form-group">
                    <label for="txtTrabajo">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen"  placeholder="Imagen">
                </div>



                <div class="btn-group" role="group" aria-label="">
                    <button type="button" name="Accion" value="Agregar"   class="btn btn-success">Agregar </button>
                    <button type="button" name="Accion" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="button" name="Accion" value="Cancelar"  class="btn btn-info">Cancelar</button>
                </div>
        </form>


        </div>

        
    </div>
   


</div>

<div class="col-md-7">
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Analista en sistema</td>
                <td>imagen.jpg</td>
                <td>Seleccionar | Borrar </td>
            </tr>
           
        </tbody>
    </table>



</div>


<?php   include("../template/pie.php");  ?>