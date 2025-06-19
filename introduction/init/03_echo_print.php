<?php
/* CONCEPTO: echo y print 
 * ----------------------------
 * - Son estructuras para mostrar texto/variables en pantalla
 * - echo : mas usado, permite multiples parametros
 * - print : siempre retorna 1, acepta un solo argumento
 */

 // APLICACION AL SISTEMA DE TALLERES:
 // ---------------------------------------

// 1. Mostrar texto simple
echo "<h2>Talleres Disponibles</h2>";
print "<p>Incripciones Abiertas</p>";

// 2. Mostrar Variables con echo (doble comilla interpreta variables)
$taller = "Fotografia Digital";
$cupos = 15;

echo "<p>Taller: $taller</p>";
echo "<p>Cupos restantes: $cupos</p>";

// 3. Concatenacion con . 
echo "<p> Taller: " . $taller . "</p>";

// 4. Diferencia practica entro echo y print
print "<br>"; // print siempre retorna 1
echo "echo ", "puede ", "mostrar ", "varios", "textos "; 
// print "no", "permite", "esto"; // Error
?>