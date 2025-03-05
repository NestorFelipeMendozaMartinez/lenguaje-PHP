<?php
// Solicitar valores al usuario
echo 'Ingrese valor para A: ';
$A = intval(trim(fgets(STDIN))); // Leer y convertir a entero

echo 'Ingrese valor para B: ';
$B = intval(trim(fgets(STDIN))); // Leer y convertir a entero

// Operaciones matemáticas
$suma = $A + $B;
echo 'La suma de los números es: ' . $suma . "\n";

$res = $A - $B;
echo 'La resta de los números es: ' . $res . "\n";

$multi = $A * $B;
echo 'La multiplicación de los números es: ' . $multi . "\n";

$div = $A / $B;
echo 'La división de los números es: ' . $div . "\n";

// Comparaciones
$igual = $A == $B;
echo '¿El número A es igual a B? ' . ($igual ? 'Sí' : 'No') . "\n";

$mayor = $A > $B;
echo '¿El número A es mayor que B? ' . ($mayor ? 'Sí' : 'No') . "\n";

echo 'El número menor es: ' . min($A, $B) . "\n"; // Usar la función min para encontrar el menor
echo 'El número mayor es: ' . max($A, $B) . "\n"; // Usar la función max para encontrar el mayor
?>