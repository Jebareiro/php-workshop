<?php
/*
 * CONCEPTO: Variable en PHP
 * --------------------------
 * - Son Contenedores para guardar datos.
 * - Empiezan con $ y su nombre (ej: $nombre).
 * - No necesitas declarar el tipo de dato 
 */

// EJEMPLOS PARA EL SISTEMA DE TALLERES:
// --------------------------------------

// 1. Variables simples
$nombre = "Luis Garcia"; // Texto (string)
$edad = "25"; // Numero Entero (integer)
$correo = "luis@talleres.com";

// 2. Mostrar Variables
echo "Nombre: $nombre <br>";
echo "Edad: $edad <br>";

// 3. Operaciones basicas con variables
$cupo_taller = 20;
$incriptos = 8;
$cupo_restantes = $cupo_taller - $inscriptos;

echo "Cupos Disponibles: $cupo_restantes <br>";

// 4. Reglas de nombres
$taller_principal = "Fotografia"; // Valido
// &1er_taller = "Programacion"; // Invalido (no puede empezar con numero)

?>
