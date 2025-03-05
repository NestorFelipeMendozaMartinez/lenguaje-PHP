<?php
echo 'Ingrese el primer valor: ';
$A = intval(trim(fgets(STDIN)));

echo 'Ingrese el segundo valor: ';
$C = intval(trim(fgets(STDIN)));

$valor = $A ** $C;
echo 'La potencia de ' . $A . ' sobre ' . $C . ' es: ' . $valor . "\n";
?> 