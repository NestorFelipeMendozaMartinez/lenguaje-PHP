<?php
// Crear la lista
$Lista = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'viernes', 'sabado'];

// Imprimir el elemento en la posición 4 (recordar que en PHP los índices comienzan en 0)
echo $Lista[4] . "\n"; // Imprime "viernes"

// Imprimir la lista completa
print_r($Lista); // Imprime toda la lista

// Imprimir una porción de la lista (elementos en las posiciones 0, 1 y 2)
print_r(array_slice($Lista, 0, 3)); // Imprime ['Lunes', 'Martes', 'Miercoles']

// Crear una lista más compleja con números y una sublista
$Lista = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'viernes', 'sabado', 1, 2, 3, ['Esteban', 0.2, 2.25, true]];

// Imprimir una porción de la lista principal y una porción de la sublista
echo "Porción de la lista principal: ";
print_r(array_slice($Lista, 0, 4)); // Imprime ['Lunes', 'Martes', 'Miercoles', 'Jueves']

echo "Porción de la sublista: ";
print_r(array_slice($Lista[9], 0, 3)); // Imprime ['Esteban', 0.2, 2.25]
?>