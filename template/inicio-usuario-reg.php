<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, initial-scale-1.0">
   <title>home</title>
</head>

<body>
   <h1> Bienvenido:
      <?php echo $_SESSION['email'] ?>
   </h1>
</body>

</html>