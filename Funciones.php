<?php
// Arrays en PHP (equivalente a tuplas en Python)
$a = [1, 2, 3, 4, 5];
$b = [6, 7, 8, 9, 10];
$c = [];

// Multiplicar elementos de los arrays
for ($contador = 0; $contador < count($a); $contador++) {
    $c[] = $a[$contador] * $b[$contador];
}
print_r($c); // Imprimir el array resultante

// Funciones en PHP

// Definición y llamada de una función
function mostrar_texto() {
    echo "Hola\n";
}
mostrar_texto(); // Llamada a la función

// Función que multiplica dos números
function multiplicar() {
    $a = 5;
    $b = 8;
    echo ($a * $b) . "\n";
}
multiplicar(); // Llama a la función

// Ámbito de las variables
function multiplicar_ambito() {
    global $a, $b; // Acceder a variables globales
    echo ($a * $b) . "\n";
}
$a = 5;
$b = 8;
multiplicar_ambito(); // Llamada a la función

// Funciones con return
function multiplicar_return() {
    $a = 5;
    $b = 8;
    return $a * $b;
}
$resultado = multiplicar_return();
echo ($resultado + 5) . "\n"; // Imprimir el resultado + 5

// Función que devuelve un booleano
function validar_dato($a) {
    if ($a == 5) {
        return true;
    } else {
        return false;
    }
}
$a = 5;
$dato = validar_dato($a);
echo $dato ? "true\n" : "false\n"; // Imprimir el resultado
?>