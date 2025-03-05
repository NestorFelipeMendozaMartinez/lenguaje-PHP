<?php
// Creación de un array asociativo (diccionario)
$coche = [
    'marca' => 'Ford',
    'color' => 'rojo',
    'modelo' => 'sedan',
    'placa' => 'ROS227'
];

// Acceder a un valor
echo $coche['color'] . "\n"; // Imprime: rojo

// Cambiar un valor
$coche['color'] = 'verde';
echo $coche['color'] . "\n"; // Imprime: verde

// Acceder a otro valor
echo $coche['marca'] . "\n"; // Imprime: Ford

// Cambiar otro valor
$coche['marca'] = 'Renault';
echo $coche['marca'] . "\n"; // Imprime: Renault

// Imprimir todo el array
print_r($coche);
?>