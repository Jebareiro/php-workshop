<?php
/*
 * CONCEPTO : Operadores en PHP 
 * ----------------------------
 * - Simbolos para realizar operaciones con variables/valores.
 */

 // APLICACION AL SISTEMA DE TALLERES:
 // ------------------------------------

 // 1. OPERADORES ARITMETICOS (calculo de cupos)
 $cupos_taller_uno = 20;
 $cupo_taller_dos = 15;
 $total_cupos = $cupos_taller_uno + $cupo_taller_dos;
 echo " - Total de cupos: $total_cupos" . "\n";

 // 2. OPERADORES DE ASIGNACION (actualizacion de datos)
 $incriptos = 10;
 $incriptos += 5; // Equivalente a $incriptos = $incriptos + 5
 echo " - Inscriptos actualizados: $incriptos" . "\n";

 // 3. OPERADORES DE COMPARACION (validacion)
 $edad_participante = 18;
 $edad_minima = 16;

    if ($edad_participante >= $edad_minima) {
        echo " - El participante cumple con la edad minima" . "\n";
    }

// 4. OPERADORES LOGICOS (combinar condiciones)
$es_moderador = true;
$tiene_experiencia = false;

if ($es_moderador || $tiene_experiencia) {
    echo " - Puede acceder al taller avanzado" . "\n"; 
}

// 5. OPERADOR TERNARIO (asignacion condicional)
$cupos_disponibles = 0;
$mensaje = ($cupos_disponibles > 0) ? "Hay Cupos " : "Taller lleno ";
echo " - Estado: $mensaje" . "\n";

// 6. OPERADORES DE STRING (concadenacion)
$nombre = "Ana";
$apellido = "Lopez";
$nombre_completo = $nombre . " " . $apellido;
echo " - Nombre del participante: $nombre_completo" . "\n";

// 7. OPERADORES NULL COALESCING (valores por defecto)
$cupos_adicionales = $_GET['cupos'] ?? 5;
echo " - Cupos adicionales permitidos: $cupos_adicionales";
