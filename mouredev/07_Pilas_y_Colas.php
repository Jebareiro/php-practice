<?php

/*
 * EJERCICIO:
 * Implementa los mecanismos de introducción y recuperación de elementos propios de las
 * pilas (stacks - LIFO) y las colas (queue - FIFO) utilizando una estructura de array
 * o lista (dependiendo de las posibilidades de tu lenguaje).
-----------------------------------------------------------------------

🧱 PILAS (Stack - LIFO)
LIFO = Last In, First Out → el último que entra es el primero que sale.

📦 Ejemplo real: Apilás platos uno sobre otro.
El último que pusiste arriba es el primero que sacás.


👨‍💻 En programación:
array_push()  -> para agregar.
array_pop() -> para sacar.

*************************************
$pila = [];
array_push($pila, "a");  // entra 'a'
array_push($pila, "b");  // entra 'b'
array_pop($pila);        // sale 'b'
**************************************

-----------------------------------------------------------------------*/

echo "PILA (STACK - LIFO): ";

$pila = []; //Creamos una pila vacia

//Agregamos elementos (apilar)
array_push($pila, "Elemento 1");
array_push($pila, "Elemento 2");
array_push($pila, "Elemento 3");

print_r($pila);

// Quitamos elementos (desapilar - ultimo que entra, primero que sale)
$ultimo = array_pop($pila); // <- saca "Elemento 3"
echo "Elemento desapilado: $ultimo";

print_r($pila); // Mostramos pila despues de quitar

/*-------------------------------------------------------------------------

🚚 COLAS (Queue - FIFO)
FIFO = First In, First Out → el primero que entra es el primero que sale.

🚶 Ejemplo real: Una fila para entrar al cine.
El que llegó primero, entra primero.

👨‍💻 En programación:
array_push() para agregar al final.
array_shift() para sacar del principio.

*************************************
$cola = [];
array_push($cola, "a");  // entra 'a'
array_push($cola, "b");  // entra 'b'
array_shift($cola);      // sale 'a'
**************************************

-----------------------------------------------------------------------*/

echo "COLA (QUEUE - FIFO): ";

$cola = []; // Creamos una cola vacia

// Agregamos elementos (encolar)
array_push($cola, "Persona 1");
array_push($cola, "Persona 2");
array_push($cola, "Persona 3");

print_r($cola); //Mostramos cola actual

// Quitamos elementos -> primero que entra, primero que sale
$primero = array_shift($cola); // <- Saca "Persona 1"
echo "Elemento desencolado: $primero";

print_r($cola);  //Mostramos cola actual

//---------------------------------------------------------------------------

?>
