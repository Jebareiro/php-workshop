<?php
/* DESAFIO : Manipulacion de Strings
 * ------------------------------------
 * 1. Crea un string $titulo con el nombre del taller
 * 2. Usa strtoupper() para mostrar el titulo en mayusculas.
 * 3. Reemplaza una palabra en $titulo usando str_replace().
 * 4. Extra: Usa explode() para dividir $titulo en palabras 
 */

 $titulo = "Taller en php";

 echo strtoupper($titulo) . "\n";

 $nuevo_titulo = str_replace("php", "python", $titulo);
 echo $nuevo_titulo . "\n";

 $palabras = explode(" ", $titulo);
 print_r($palabras);
