<?php
// Definir los equipos
$Equipos = [
    '1.Países Bajos vs. Estados Unidos.',
    '2.Argentina vs. Australia.',
    '3.Francia vs. Polonia.',
    '4.Inglaterra vs. Senegal.',
    '5.Japón vs. Croacia.',
    '6.Brasil vs. Corea del Sur.',
    '7.Marruecos vs. España.',
    '8.Portugal vs. Suiza.'
];

// Arreglo para almacenar los resultados
$Resultados = [];

echo "Mundial Qatar 2022\n\nOctavos de final\n\n";

// Función para determinar el ganador
function Ganadores_octavos($Marcador, $Equipo1, $Equipo2) {
    $Goles = explode(' - ', $Marcador);
    $Goles_1 = intval($Goles[0]);
    $Goles_2 = intval($Goles[1]);
    return ($Goles_1 > $Goles_2) ? $Equipo1 : $Equipo2;
}

// Recorrer los partidos y solicitar los marcadores
foreach ($Equipos as $Partido) {
    echo $Partido . "\n";
    $Marcador = trim(fgets(STDIN)); // Leer el marcador desde la consola
    $Resultados[$Partido] = $Marcador;
}

echo "Ganadores de la fase de grupos\n";

// Mostrar los resultados y determinar los ganadores
foreach ($Resultados as $Partido => $Marcador) {
    $EquiposPartido = explode(' vs. ', str_replace(['1.', '2.', '3.', '4.', '5.', '6.', '7.', '8.'], '', $Partido));
    $Equipo1 = trim($EquiposPartido[0]);
    $Equipo2 = trim($EquiposPartido[1]);
    $Ganador = Ganadores_octavos($Marcador, $Equipo1, $Equipo2);
    echo "Partido: $Partido | Ganador: $Ganador\n";
}

echo "Total de partidos: " . count($Resultados) . "\n";
?>