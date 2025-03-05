<?php
// Lista de nombres
$nombres = ['Esteban', 'Hans', 'Jhon', 'Juan Pablo'];

// Recorrer la lista de nombres
foreach ($nombres as $nombre) {
    echo $nombre . "\n";
}

// Diccionarios
$personas = []; // Lista vacía que se llena con a, b, c y d

$a = ['nombre' => 'Esteban', 'edad' => 28];
$b = ['nombre' => 'Hans', 'edad' => 27];
$c = ['nombre' => 'Jhon', 'edad' => 41];
$d = ['nombre' => 'Juan Pablo', 'edad' => 23];

// Agregar los arrays asociativos a la lista de personas
array_push($personas, $a);
array_push($personas, $b);
array_push($personas, $c);
array_push($personas, $d);

// Recorrer la lista de personas y mostrar sus datos
foreach ($personas as $persona) {
    echo $persona['nombre'] . ' ' . $persona['edad'] . "\n";
}
?>