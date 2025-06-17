<?php
/* DESAFIO: Tipos de Datos
 * ------------------------
 * 1. Crea una variable $nombre_taller (string) con un nombre de taller.
 * 2. Define $cupo_maximo como integer
 * 3. Crea $activo (boolean) para saber si el taller esta disponible
 * 4. Usa var_dump() para mostrar el tipo de $cupo_maximo
 * 5. Extra: Crea un array $participantes con 3 nombres
 */

$nombre_taller = "Taller de POO en PHP";
$cupo_maximo = 30;
$activo = true;

var_dump($nombre_taller);
var_dump($cupo_maximo);
var_dump($activo);

$participantes = ["Ana", "Bruno", "Cecilia"];
var_dump($participantes);
