<?php

if($_POST){
    header('Location:Inicio.php');

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
            <div class="row">

            <div class="col-md-4 ">

                
            </div>


                <div class="col-md-4">
                <br/> <br/> <br/> <br/> <br/>

                    <div class="card">   
                        <div class="card-header">
                            Login
                        </div>
                        <div class="card-body">

                            <form method="POST" action="validar.php">
                                    
                            <div class = "form-group">
                            <label >Usuario</label>

                            <input type="text" class="form-control" name="Usuario"  placeholder="Escribe tu usuario" required>
                  
                            </div>

                            <div class="form-group">

                            <label for="exampleInputPassword1">Contraseña:</label>
                            <input type="password" class="form-control" name="Contraseña"  placeholder="Escribe tu contraseña" required>
                            </div>

                  

                            <button type="submit" class="btn btn-primary">Ingresar</button>
                            </form>
                  
                    

                </div>
               
            </div>


                
            </div>
            
        </div>
    </div>
    
    
  </body>
</html>