<?php
// Solicitar datos al usuario
echo "Ingrese el valor del voltaje del circuito:\n";
$Voltaje = intval(trim(fgets(STDIN))); // Leer entrada como entero

echo "Ingrese el valor de la resistencia del circuito:\n";
$Resistencia = intval(trim(fgets(STDIN))); // Leer entrada como entero

// Calcular la intensidad (amperaje)
$Intensidad = $Voltaje / $Resistencia;

// Mostrar el resultado
echo "Al conectar un resistor de R $Resistencia ohm a una fuente de V $Voltaje voltios, circulará una corriente de $Intensidad amperios.\n";
?>