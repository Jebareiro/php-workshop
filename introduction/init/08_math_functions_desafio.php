<?php
/*
 * DESAFÍO: Funciones Matemáticas
 * ------------------------------
 * 1. Calcula el área de un círculo con radio 7 (usa pi()).
 * 2. Genera un número aleatorio entre 100 y 500 para simular IDs de participantes.
 * 3. Dado el array [4.2, 4.8, 5.1], redondea cada valor al entero más cercano.
 * 4. Extra: Usa sqrt() para calcular la raíz cuadrada de 144.
 */

$radio = 7;
$area_circulo = pi() * ($radio ** 2);
echo "Area del circulo: " . round($area_circulo, 2) . "\n";

$ids_participantes = rand(100, 500);
echo "El ID del participante es: $ids_participantes" . "\n";

$array = [4.2, 4.8, 5.1];
$primer_array = $array[0];
$segundo_array = $array[1];
$tercer_array = $array[2];

echo "Entero: " . round($primer_array) . "\n";
echo "Entero: " . round($segundo_array) . "\n";
echo "Entero: " . round($tercer_array) . "\n";

$numero = 144;
$raiz_cuadrada = sqrt($numero);
echo "La Raiz cuadrada de $numero es $raiz_cuadrada";


?>