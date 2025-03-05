<?php
// Solicitar datos al usuario
echo "Escriba sus nombres completos:\n";
$a = trim(fgets(STDIN)); // Leer entrada como string

echo "Escriba sus apellidos completos:\n";
$b = trim(fgets(STDIN)); // Leer entrada como string

echo "Escriba su profesión:\n";
$c = trim(fgets(STDIN)); // Leer entrada como string

echo "Escriba su año de nacimiento:\n";
$d = intval(trim(fgets(STDIN))); // Leer entrada como entero

// Calcular la edad
$e = 2025 - $d;

// Mostrar el resultado
echo "El (La) $c $a $b tiene $e años.\n";
?>