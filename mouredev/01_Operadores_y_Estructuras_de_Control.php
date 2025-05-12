<?php

/* EJERCICIO:

- 1) Crea un comentario en el código y coloca la URL del sitio 
web oficial del lenguaje de programación que has seleccionado.
- 2) Representa las diferentes sintaxis que existen de crear comentarios
en el lenguaje (en una línea, varias...). */


/* Sitio Web de PHP - https://www.php.net/ */ // 1️

# Esto es un comentario    # 2) Comentario de una línea

/* Esto es 
un comentario
de varias 
lineas */       # 2) Comentario de varias líneas


/* 3) Crea una variable 
(y una constante si el lenguaje lo soporta). */

# Variable
$nombre = "Jessi";

# Constantes (ambas formas son válidas)
const valor = 23;
define("num", 3);

/* 4)  Crea variables representando todos los tipos de datos primitivos
 del lenguaje (cadenas de texto, enteros, booleanos...). */

# ENTERO
$my_int = 2;

# STRING
$my_text = "cadena de texto";

# BOOLEAN
$my_boolean = true;
$my_boolean = false;

# FLOAT
$my_float = 4.32;

# NULL
$null = null;

/* 5) Imprime por terminal el texto: "¡Hola, [y el nombre de tu lenguaje]!" */

echo "¡Hola, PHP!";

?>
