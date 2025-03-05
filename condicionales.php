<?php
echo "Seleccione la figura a calcular su área:\n\n";
echo "1 para rombo\n";
echo "2 para rectángulo\n";
echo "3 para cuadrado\n";
echo "4 para trapecio\n";
$figura = trim(fgets(STDIN)); // Leer la opción del usuario

$pi = 3.1416;
$const = 2;

switch ($figura) {
    case '1':
        echo "Ingresa el valor de la diagonal mayor:\n";
        $Dmayor = intval(trim(fgets(STDIN)));
        echo "Ingresa el valor de la diagonal menor:\n";
        $Dmenor = intval(trim(fgets(STDIN)));
        $area = ($Dmayor * $Dmenor) / $const;
        echo "El área del rombo es: " . $area . "\n";
        break;

    case '2':
        echo "Ingresa el valor del largo del rectángulo:\n";
        $largo = intval(trim(fgets(STDIN)));
        echo "Ingresa el valor del ancho del rectángulo:\n";
        $ancho = intval(trim(fgets(STDIN)));
        $area = $largo * $ancho;
        echo "El área del rectángulo es: " . $area . "\n";
        break;

    case '3':
        echo "Ingresa el valor del lado del cuadrado:\n";
        $lado = intval(trim(fgets(STDIN)));
        $area = $lado * $lado;
        echo "El área del cuadrado es: " . $area . "\n";
        break;

    case '4':
        echo "Ingresa el valor de la base mayor:\n";
        $Bmayor = intval(trim(fgets(STDIN)));
        echo "Ingresa el valor de la base menor:\n";
        $Bmenor = intval(trim(fgets(STDIN)));
        echo "Ingresa la altura del trapecio:\n";
        $H = intval(trim(fgets(STDIN)));
        $area = (($Bmayor + $Bmenor) * $H) / 2;
        echo "El área del trapecio es: " . $area . "\n";
        break;

    default:
        echo "Opción no válida.\n";
        break;
}
?>