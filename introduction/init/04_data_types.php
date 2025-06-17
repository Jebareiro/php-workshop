<?php
/*
 * CONCEPTO: Tipos de Datos en PHP
 * -------------------------------
 * - PHP soporta varios tipos de datos para variables.
 * - El tipo se determina automaticamente segun el valor asignado.
*/

// APLICACION AL SISTEMA DE TALLERES:
// -----------------------------------

// 1. STRING(texto): Nombres, correos, etc.
$nombre = "Ana Lopez";
$taller = "Fotografia";
echo "<p> Taller: $taller </p>";
var_dump($nombre); // Muestra tipo y valor


// 2. INTEGER (numeros enteros): Edad, cupos, etc
$edad = 25;
$cupos = 20;
echo "<p>Cupos Disponibles: $cupos</p>";

// 3. FLOAT (decimales): Precios, promedios, etc;
$costo_materiales = 15.99;
var_dump($costo_materiales);

// 4. BOOLEAN (true/false): Eres Moderador?
$es_moderador = true;
echo "<p> Es Moderador? " . ($es_moderador ? "SI" : "NO") . "</p>";

// 5. ARRAY: Lista de talleres o participantes
$talleres_disponibles = array("Fotografia", "Programacion", "Disenho");
echo "<p>Talleres: " . implode(", ", $talleres_disponibles) . "</p>";

// 6. NULL: Variable sin valor
$comentario = null;
var_dump($comentario);

// 7. Cambio de tipo (casting)
$total_incriptos = 30; // integer
$total_incriptos = (string)$total_incriptos; // ahora es string

?>