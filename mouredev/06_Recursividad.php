<?php
/*
 * EJERCICIO:
 * Entiende el concepto de recursividad creando una función recursiva que imprima
 * números del 100 al 0.
 *
 * DIFICULTAD EXTRA (opcional):
 * Utiliza el concepto de recursividad para:
 * - Calcular el factorial de un número concreto (la función recibe ese número).
 * - Calcular el valor de un elemento concreto (según su posición) en la 
 *   sucesión de Fibonacci (la función recibe la posición).
 */

 /*
--------------------------------------------
 🔧 ¿Qué es recursividad?
Una función recursiva es una función que se 
llama a sí misma para resolver un problema 
dividiéndolo en partes más pequeñas.
--------------------------------------------
*/

// 1- Funcion recursiva que imprime numeros de 100 a 0

function contar_regresivo($n) {
    if ($n < 0) {
        // : cuando $n es menor que 0, la funcion deja de llamarse
        return;
    }
    echo "$n\n"; // imprime el número actual seguido de salto de línea
    contar_regresivo($n - 1); // Llama a sí misma con $n - 1 para seguir contando hacia abajo
}

// Llamamos a la funcion para imprimir del 100 al 0
echo "Cuenta regresiva del 100 al 0:\n";
contar_regresivo(100);


/* 2- Funcion recursiva para calcular factorial

-------------------------------------
El factorial de un número n es:
n! = n * (n-1) * (n-2) * ... * 1 
-------------------------------------*/

function factorial($n) {
    if ($n <= 1) {
        // : Factorial de 0 o 1 es 1
        return 1;
    }
    // Retorna n multiplicado por factorial de n-1 (llamada recursiva)
    return $n * factorial($n - 1);
}

// Ejemplo con factorial de 5
echo "\nFactorial de 5: " . factorial(5) . "\n";


/* 3- Funcion recursiva para calcular FIBONACCI

----------------------------------------
🔢 ¿Qué es la sucesión de Fibonacci?
Es una serie de números donde cada número 
es la suma de los dos anteriores.
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, ...
-----------------------------------------*/

function fibonacci($n) {
    if ($n == 0){
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        // RECURSION : suma de los dos valores anteriores en la sucesión
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// EJEMPLO con fibonacci en la posicion 7
echo "\nFibonacci en posicion 7: " . fibonacci(7) . "\n";

?>
