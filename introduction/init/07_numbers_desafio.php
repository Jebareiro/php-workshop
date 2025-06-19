<?php
/*
 * DESAFÍO: Números en PHP
 * ------------------------
 * 1. Crea una variable $edad con un número entero.
 * 2. Define $precio como flotante (ej: 19.99).
 * 3. Usa is_int() para verificar si $edad es entero.
 * 4. Convierte $precio a entero con (int) y muestra el resultado.
 * 5. Extra: Crea un string numérico y usa is_numeric() para validarlo.
 */


$edad = 20;
$precio = 19.01;

var_dump(is_int($edad));
$precio_entero = (int)$precio;
echo "Precio Entero: $precio_entero" . "\n";

$numero = "123";
var_dump(is_numeric($numero));

?>