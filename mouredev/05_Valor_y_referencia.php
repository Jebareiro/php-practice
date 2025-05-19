<?php

/*
 * EJERCICIO:
 * - Muestra ejemplos de asignación de variables "por valor" y "por referencia", según
 *   su tipo de dato.
 * - Muestra ejemplos de funciones con variables que se les pasan "por valor" y 
 *   "por referencia", y cómo se comportan en cada caso en el momento de ser modificadas.
 * (Entender estos conceptos es algo esencial en la gran mayoría de lenguajes)
 */

// 1. Asignacion de valor

$a = 10;        # Variable $a vale 10
$b = $a;        # $b copia el valor de $a

$b = 20;        # Cambiamos $b, pero $a no cambia

echo "Asignacion por valor:\n";
echo "a = $a\n";      # Imprime 10
echo "b = $b\n";      # Imprime 20


// 2. Asignacion por referencia

$x = 30;
$y = &$x;       # y hace referencia a x (ambas apuntan al mismo valor )

$y = 50;        # cambiamos $y, tambien cambia $x


/* -----------------------------------------
 🔧 ¿Para qué se usa &?
Se usa cuando querés evitar duplicar datos 
o sincronizar valores entre variables. 
----------------------------------------- */

echo "Asignacion por referencia:\n";
echo "x = $x\n";       # Imprime 50
echo "y = $y\n";       # Imprime 50

// 3. Funcion con paso por valor 
function incrementar_valor(int $num) {
    $num = $num + 1;        # Solo modifica la copia interna
    echo "Dentro de funcion (valor): $num\n";
}

$valor = 5;
incrementar_valor($valor);      # Llama a la funcion con copia del valor
echo "Despues de funcion (valor): $valor\n";  # Sigue siendo 5

// 4. Funcion con paso por referencia
function incrementar_referencia(&$num) {
    $num = $num + 1;        # Modifica la variable original
    echo "Dentro de funcion (referencia): $num\n";
}

$referencia = 5;
incrementar_referencia($referencia);        # Llama pasando referencia
echo "Despues de funcion (referencia): $referencia\n";    # ahora vale 6

/* DIFICULTAD EXTRA (opcional):
 * Crea dos programas que reciban dos parámetros (cada uno) definidos como
 * variables anteriormente.
 * - Cada programa recibe, en un caso, dos parámetros por valor, y en otro caso, por referencia.
 *   Estos parámetros los intercambia entre ellos en su interior, los retorna, y su retorno
 *   se asigna a dos variables diferentes a las originales. A continuación, imprime
 *   el valor de las variables originales y las nuevas, comprobando que se ha invertido
 *   su valor en las segundas.
 *   Comprueba también que se ha conservado el valor original en las primeras.
 */

// Intercambio por valor (sin afectar los originales)
function intercambiar_valor($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    return [$a, $b];
}

$val1 = "manzana";
$val2 = "banana";

list($nuevo1, $nuevo2) = intercambiar_valor($val1, $val2);

echo "Intercambio por valor:\n";
echo "Originales: $val1, $val2\n";         # manzana, banana
echo "Nuevos: $nuevo1, $nuevo2\n";         # banana, manzana

// Intercambio por referencia (modifica los originales)
function intercambiar_referencia(&$a, &$b) {
    $temp = $a;  // $temp ahora vale "azul"
    $a = $b;     // $a toma el valor de $b → ahora $a = "rojo"
    $b = $temp;  // $b toma el valor anterior de $a → ahora $b = "azul"
}

$ref1 = "azul";
$ref2 = "rojo";

intercambiar_referencia($ref1, $ref2);

echo "Intercambio por referencia:\n";
echo "Referencias: $ref1, $ref2\n";         # rojo, azul

?>
