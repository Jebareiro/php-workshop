<?php
/*
 * DESAFIO: SLICING Y ESCAPE
 * --------------------------
 * 1. Dado $codigo = "WORKSHOP-2023-DSGN":
 *  - Usa Substr() para extraer "2023"
 *  - Extrae las ultimas 4 letras.
 * 2. Crea un string $info que use:
 *  - Tabulacion (\t) para alinear texto.
 *  - Salto de linea (\n) para separar secciones.
 * 3. Extra: Usa slicing negativo en un nuevo string
 */


 // 1.
$codigo = "WORKSHOP-2023-DSGN";

$extraccion_uno = substr($codigo, 9, 4); // el 4 es la cantidad de letras
echo "Extraccion: $extraccion_uno" . "\n";
;
$extraccion_dos = substr($codigo, -4);
echo "Extraccion: $extraccion_dos" . "\n";

// 2.
$info = "El curso sera el\n - Lunes:\t10:00 - 12:00\n - Miercoles:\t14:00 - 16:00";
echo "<pre>$info</pre>" . "\n";

//3.
$ubicacion = "Lugar: Universidad-Sala-5-Piso-4";
$sala = substr($ubicacion, 19, -7);
echo "Lugar: $sala";
