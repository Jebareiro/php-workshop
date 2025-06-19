<?php
/* CONCEPTO: Slicing y Escape en String 
 * -------------------------------------
 * - substr(): Extraer partes de un string.
 * - Caracteres de espace: \n, \ , etc . para texto adicional
 */

// APLICACION AL SISTEMA DE TALLERES:
// -----------------------------------

// 1. SLICING CON substr()
$codigo_taller = "TALLER-2024-PHP";

// Extraer el anho (posiciones 7 - 11)
$anho = substr($codigo_taller, 7, 4);
echo "Anho del taller: $anho";

// Extraer el tipo (ultimas 3 letras)
$tipo = substr($codigo_taller, -3);
echo "Tipo: $tipo"; 

// 2. ESCAPE DE CARACTERES
$descripcion = "Este taller es \"gratuito\" para todos.";
echo "$descripcion";

// Ejemplo con salto de linea y tabulacion
$horario = "Lunes:\t10:00 - 12:00\n Miercoles:\t14:00 - 16:00";
echo "<pre>$horario</pre>";

// 3. SLICING NEGATIVO
$ubicacion = "Sala-5-Piso-3";
$sala = substr($ubicacion, 5, -5); // Extrae "5-Piso"
echo "Ubicacion reducida: $sala<br>";




/*

Explicación clave adaptada al sistema:
==========================================
1. substr() para códigos:
Útil para extraer años (2024), tipos (PHP) o ubicaciones (Sala-5) de identificadores.
Ejemplo: substr("TALLER-2024-PHP", 7, 4) → 2024.

2. Escape para formatos:
\t crea columnas alineadas en horarios.
\n separa descripciones multilínea (requiere <pre> en HTML).

3. Slicing negativo:
substr($ubicacion, 5, -5) omite 5 caracteres finales.

*/
?>