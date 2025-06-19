<?php 
/* CONCEPTO: Numeros en PHP 
 * --------------------------
 * - Enteros (integer): Numeros sin decimales
 * - Flotantes (float): Numeros con decimales
 * - Cadenas numericas (string que parecen numeros)
 */

 // APLICACION AL SISTEMA DE TALLERES:
 // -----------------------------------

 // 1. ENTEROS (cupos, edades, IDs)
 $cupos_disponibles = 30;
 $edad_minima = 18;
 echo " - Cupos: $cupos_disponibles, Edad Minima: $edad_minima" . "\n";

 // VERIFICACION DE TIPO
 echo " - ";
 var_dump(is_int($cupos_disponibles)) . "\n";

 // 2. FLOTANTES (costos, promedios)
 $costo_materiales = 25.99;
 $rating_taller = 4.7;
 echo "- Costo Materiales: $$costo_materiales" . "\n";

 // Limite de numeros
 echo " - Maximo entero en PHP : " . PHP_INT_MAX ;

 // 3. CADENAS NUMERICAS (formularios)
 $cupos_form = "30";
 if (is_numeric(($cupos_form))) {
    echo "El Valor '$cupos_disponibles' es numerico" . "\n";
 }

 // 4. CONVERSION DE TIPOS (casting)
 $total_incriptos = "45 participantes";
 $incriptos_numeros = (int)$total_incriptos;
 echo "Incriptos convertidos: $incriptos_numeros" . "\n";

 // 5. OPERACIONES CON DIFERENTES TIPOS
 $cupos_ocupados = 25;
 $cupos_totales = "30";
 $disponibles = $cupos_totales - $cupos_ocupados; // PHP CONVIERTE AUTOMATICAMENTE
 echo "Cupos Disponibles: $disponibles";

 