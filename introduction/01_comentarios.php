<?php
/* Concepto: Comentarios en PHP 

Para que sirven?
- Documentar el codigo para que sea legible.
- Desactivar temporalmente lineas de codigo sin borrarlas.

Tipos:
1. Una Linea: //
2. Multilinea: /* ... */ 


// Ejemplo Aplicado al sistema de talleres:
// -----------------------------------------

// Datos de un participante (comentario de una linea)
$nombre = "Ana Lopez"; // Nombre completo del participante

/* 
        Comentario Multilinea:
        Este bloque representa un regsitro en la base de datos.
        Campos:
        - nombre: string
        - email: string
        - tipo_participante: "normal" o "moderador"

*/

$email = "ana@talleres.com";
$tipo_participante = "normal";
?>