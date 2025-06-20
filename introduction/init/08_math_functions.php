<?php
/* 
 * CONCEPTO: Funciones Matematicas en PHP
 * ----------------------------------------
 *  - Funciones incorporadas para operaciones matematicas comunes.
 */

 // APLICACION AL SISTEMA DE TALLERES:
 // ---------------------------------

 // 1. CONSTANTE PI (areas de espacio circulares)
 $radio_sala = 5;
 $area_circulo = pi() * ($radio_sala ** 2);
 echo "Area de la sala circular: " . round($area_circulo, 2) . "\n";

 // 2. MINIMO Y MAXIMO (cupos por taller)
 $incriptos_talleres = [15, 8, 22, 10];
 echo "Minimo Incriptos: " . min($incriptos_talleres) . "\n";
 echo "Maximo Incriptos: " . max($incriptos_talleres) . "\n";

 // 3. VALOR ABSOLUTO (diferencia entre cupo)
 $diferencia_cupos = -7;
 echo "Diferencia ajustada: " . abs($diferencia_cupos) . "\n";

 // 4. Raiz Cuadrada (organizacion de espacios)
 $total_espacios = 64;
 $filas = sqrt(($total_espacios));
 echo "Para $total_espacios participantes, organizar en " . (int)$filas . " filas" . "\n";

// 5. Redondeo (calificaciones)
$rating_promedio = 4.367;
echo "Rating promedio: " . round($rating_promedio, 1) . "/5" . "\n";

// 6. Numeros Aleatorios (asignacion de grupos)
$grupos_aletorios = rand(1, 10);
echo "Asignar al grupo: $grupos_aletorios" . "\n";

// 7. Ejemplo Combinado (capacidad de taller)
$capacidad_minima = 10;
$capacidad_maxima = 30;
$capacidad_aleatoria = rand($capacidad_minima, $capacidad_maxima);
echo "Cupos Asigandos para el nuevo taller: $capacidad_aleatoria";
?>