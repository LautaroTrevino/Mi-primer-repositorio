<?php
  if ($_POST) {
    # code...
  
  $Pi=3.14;
    $Radio=$_POST['Radio'];

    $Area= ($Radio * $Radio) * $Pi;

    echo "El area del circulo es= ".$Area;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulo</title>
</head>
<body>
    <form action="" method="post">

    Pi ="3.14"
    <br/>

    Radio=
    <input type="text" name="Radio" id="">
    <br/>
    <input type="submit" value="Calcular">

    </form>
</body>
</html>