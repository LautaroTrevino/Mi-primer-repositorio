<?php
for ($i=0; $i<=10 ; $i++)  {
    $num=$i;
    for ($l=0; $l<=10; $l++) {
            $resultado=$num * $i;
            echo "El ".$num." multiplicado por ".$i." es igual a ".$resultado."<brb>";
            if ($resultado%2== 0) {
            echo "El numero ".$resultado." es par. <br>";
        }else{    
                echo "El numero ".$resultado." es impar. <br>";

            }}
            echo "<br>"
        
        echo "<br>*************************************************<br>";
}
?>