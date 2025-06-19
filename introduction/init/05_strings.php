<?php

/*
 * CONCEPTO: String en PHP 
 * ------------------------
 * - Secuencia de caracteres (texto) entre comillas simples o dobles
 * - Funciones utiles para manipulacion de texto
*/

// APLICACION AL SISTEMA DE TALLERES
// ----------------------------------

// 1. Creacion de strings
$nombre_taller = "Fotografia Digital"; // Comillas Dobles
$instructor = 'Carlos Mendez'; // Comillas Simples

// 2. Diferencias entre comillas
$cupos = 15;
echo "Taller: $nombre_taller - Cupos: $cupos<br>"; // Interpreta variables
echo 'Taller: $nombre_taller - Cupos: $cupos<br>'; // Muestra texto literal

// 3. Funciones Comunes
// Longitudd de un string
echo "Longitud del nombre: " . strlen($nombre_taller); // Validar longitud de nombres en formularios.
echo "<br>";
// Contar palabras
$description = "Taller intensivo de fotografia para principiantes";
echo "<br>";
echo "Palabras en la descripcion: " . str_word_count($description); 

// Buscar Texto
echo "Posicion de 'fotografia': " . strpos($description, "fotografia");

// 4. Modificacion de Strings
// Mayusculas/minisculas

echo strtoupper($nombre_taller);
echo strtolower($instructor);

// Reemplazar texto
$nueva_descripcion = str_replace("principiantes", "avanzados", $description);
echo $nueva_descripcion;

// 5. Convertir string a array
$palabras = explode(" ", $description);
print_r($palabras);

?>