<?php
/*
 * DESAFÍO: Constantes en PHP
 * ---------------------------
 * 1. Define una constante APP_VERSION con valor "1.0".
 * 2. Crea un array constante HORARIOS con días de talleres.
 * 3. Usa __DIR__ para mostrar la ruta del archivo actual.
 * 4. Extra: Define una constante con const para el año actual.
 */

define ("APP_VERSION", 1.0);

define ("HORARIOS", [
    " - 7AM - 12PM",
    " - 1PM - 5PM",
    " - 6PM - 11PM" 
]);

echo "Los horarios de los talleres disponibles son: " . "\n" . HORARIOS[0] . "\n" . HORARIOS[1] . "\n" . HORARIOS[2] . "\n";

echo "La ruta de este archivo es: " . __DIR__ . "\n";

const ANHO_ACTUAL = 2025;
echo "El anho actual es: ", ANHO_ACTUAL;




?>