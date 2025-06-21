<?php
/*
 * DESAFÍO: Operadores en PHP
 * ---------------------------
 * 1. Calcula el 20% de $capacidad_taller usando operadores aritméticos.
 * 2. Usa operadores de comparación para verificar si $edad >= $edad_minima.
 * 3. Combina dos condiciones con operadores lógicos (ej: taller disponible Y cupos > 0).
 * 4. Concatena $taller1 y $taller2 con el operador de string.
 * 5. Extra: Usa el operador ternario para asignar "Abierto" o "Cerrado".
 */

// 1.
$capacidad_taller = 80;
$capacidad_total = ($capacidad_taller * 0.20);
echo " - El 20% de la capacidad del taller es de: $capacidad_total " . "\n";


// 2. 

$edad = 17;
$edad_minima = 16;

if ($edad >= $edad_minima) {
    echo " - Cumple con la edad minima" . "\n";
};

// 3. 

$taller_disponible = false;
$cupos = 10;  

if ($taller_disponible) {
    echo " - El taller esta disponible" . "\n";
} 

if ($cupos > 0) {
    echo " - Hay $cupos disponibles" . "\n";
};

// 4.

$taller1 = "Fotografía";
$taller2 = "Programacion";

$talleres = $taller1 . " y " . $taller2;
echo " - Los Talleres disponibles son : $talleres" . "\n";

// 5. 

$taller_domingos = false;
$dias_disponibles = $taller_domingos ? "El taller esta abierto" : "El taller esta cerrado";
echo " - Los domingos : $dias_disponibles";


?>