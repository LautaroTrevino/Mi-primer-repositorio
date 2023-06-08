<?php
    if ($_POST) {
        $Altura=$_POST['Altura'];
        $Base=$_POST['Base'];

        $suma=$Altura*$Base;

        echo $suma;
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carito zorra</title>
</head>
<body>
    <form action="Area rectangulo.php" method="post">
    Base:
    <input type="text" name="Base" id="">
    Altura:
    <input type="text" name="Altura" id="">
    <input type="submit" value="Calcular">


    </form>
     

    
</body>
</html>