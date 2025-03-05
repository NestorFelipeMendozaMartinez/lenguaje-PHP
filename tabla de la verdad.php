<?php
// Operaciones con booleanos
$a = true;
$b = false;
echo ($a && $b) ? 'true' : 'false'; // Imprime "false"
echo "\n";

// Comparaciones con enteros
$a = 2;
$b = 3;
$c = 4;
$d = 10;

echo ($a == $b && $c < $d) ? 'true' : 'false'; // Imprime "false"
echo "\n";

echo (!$a == $b && $c > $d) ? 'true' : 'false'; // Imprime "false"
echo "\n";
?>