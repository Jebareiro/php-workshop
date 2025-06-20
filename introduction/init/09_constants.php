<?php
/*
 * CONCEPTO: Constantes en PHP 
 * ---------------------------
 *  - Valores inmutanles durante la ejecucion del script
 *  - Utiles parwa configuracions globales
 */

 // APLICACION AL SISTEMA DE TALLERES:
 // -----------------------------------

 // 1. CONTSTANTES BASICAS (define())
 define("MAX_PARTICIPANTES", 50);
 define("NOMBRE_EMPRESA" , "Talleres Creativos S.A");

 echo " - Limite de participantes por taller: " . MAX_PARTICIPANTES . "\n";

 // 2. CONSTANTES CON ARRAYS 
 define("TALLERES_DISPONIBLES", [
    "Fotografia",
    "Programacion",
    "Disenho"
 ]);

 echo " - Los primeros talleres disponibles son: " . TALLERES_DISPONIBLES[0] . " y " . TALLERES_DISPONIBLES[1] . "\n";

 // 3. CONTS KEYWORD (fuera de bloques)
 const TARIFA_BASE = 0; // Talleres Gratuitos
 echo " - Talleres Base: $" . TARIFA_BASE . "\n";

 // 4. CONSTANTES GLOBALES
 function mostrar_limite() {
    echo " - Desde funcion: El limite sigue siendo " . MAX_PARTICIPANTES . "\n";
 }

 mostrar_limite();

 //5. CONSTANTES MAGICAS
 echo " - Este archivo esta en: " . __FILE__ . "\n";
 echo " - Linea actual: " . __LINE__ . "\n";

 // Ejemplo con clase (para contexto futuro)
 class Taller {
    public function info() {
        echo " - Clase: " . __CLASS__ . "\n";
    }
 }

 $taller = new Taller();
 $taller->info();

 ?>