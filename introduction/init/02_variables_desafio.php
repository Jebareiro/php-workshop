<?php

/* 
 * DESAFIO: Variables Basicas
 * ------------------------------
 * 1. Crear una variable $taller con el nombre del taller (ej: "Programacion").
 * 2. Define $capacidad con el numero maximo de participantes (ej: 15)
 * 3. Usa echo para mostrar: "El Taller [taller] tiene [capacidad] cupos
 */

// TALLER DE PROGRAMACION

$taller = "Curso de Programacion en PHP";
$capacidad = 50;
$inscriptos = 43;

$cupos_disponibles = $capacidad - $inscriptos;

echo "El $taller tiene $capacidad cupos, de los cuales solo quedan $cupos_disponibles";

