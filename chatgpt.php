<?php

// Definir los datos a incluir en la planilla
$datos = array(
    array('Nombre', 'Apellido', 'Edad'),
    array('Juan', 'Pérez', 25),
    array('María', 'González', 30),
    array('Pedro', 'Ramírez', 40)
);

// Crear la planilla de datos
$planilla = '<table>';
foreach ($datos as $fila) {
    $planilla .= '<tr>';
    foreach ($fila as $dato) {
        $planilla .= '<td>' . $dato . '</td>';
    }
    $planilla .= '</tr>';
}
$planilla .= '</table>';

// Mostrar la planilla en el navegador
echo $planilla;

?>
