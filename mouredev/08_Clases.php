<?php

/*
 * EJERCICIO:
 * Explora el concepto de clase y crea un ejemplo que implemente un inicializador,
 * atributos y una función que los imprima (teniendo en cuenta las posibilidades
 * de tu lenguaje).
 * Una vez implementada, créala, establece sus parámetros, modifícalos e imprímelos
 * utilizando su función.*/

// 🧱 PARTE 1: CLASE SIMPLE (con constructor, atributos y método)

// 📦 Definimos una clase llamada Persona
class Persona {
    public $nombre;  // 🧾 Atributo público: nombre
    public $edad;    // 🧾 Atributo público: edad

    // 🚪 Constructor: se ejecuta al crear un objeto
    public function __construct($nombre, $edad) 
    {
        $this->nombre = $nombre;
        $this->edad = $edad;    
    }

    // 📢 Método: imprime los datos del objeto
    public function imprimir_datos() {
        echo "Nombre: $this->nombre\n";   //  Hace referencia al propio objeto
        echo "Edad: $this->edad\n";
    }
}

//  Creamos una instancia (objeto) de la clase
$persona1 = new Persona("Ana", 25);

//  Mostramos sus datos
$persona1->imprimir_datos();

//  Modificamos los atributos directamente
$persona1->nombre = "Jessica";
$persona1->edad = 30;

//  Mostramos los datos actualizados
$persona1->imprimir_datos();



// ------------------------------------------------

// public → accesible desde cualquier parte del código
// (dentro o fuera de la clase).

// private → solo accesible dentro de la clase.
// No podés acceder directamente desde afuera.

//--------------------------------------------------

// 🧱 PARTE 2: DIFICULTAD EXTRA – CLASE PILA Y COLA

// 📦 Clase Pila (LIFO - Last In, First Out)
class Pila {
    private $elementos = [];

    // 🧊 Añade un elemento al final de la pila
    public function apilar($elemento) {
        array_push($this->elementos, $elemento);
    }

    // 🎯 Quita el último elemento (el más recientemente agregado)
    public function desapilar() {
        return array_pop($this->elementos);
    }

    // 🔢 Cuenta los elementos de la pila
    public function contar() {
        return count($this->elementos);
    }

    // 🖨️ Muestra el contenido de la pila
    public function imprimir() {
        echo "Contenido de la pila: ";
        print_r($this->elementos);
    }
}

// ---------------------------------------------

 /* DIFICULTAD EXTRA (opcional):
 * Implementa dos clases que representen las estructuras de Pila y Cola (estudiadas
 * en el ejercicio número 7 de la ruta de estudio)
 * - Deben poder inicializarse y disponer de operaciones para añadir, eliminar,
 *   retornar el número de elementos e imprimir todo su contenido.
 */

// 📦 Clase Cola (FIFO - First In, First Out)
class Cola {
    private $elementos = [];

    // 🧊 Añade un elemento al final de la cola
    public function encolar($elemento) {
        array_push($this->elementos, $elemento);
    }

    // 🎯 Quita el primer elemento que ingresó
    public function desencolar() {
        return array_shift($this->elementos);
    }

    // 🔢 Cuenta los elementos de la cola
    public function contar() {
        return count($this->elementos);
    }

    // 🖨️ Muestra el contenido de la cola
    public function imprimir() {
        echo "Contenido de la cola: ";
        print_r($this->elementos);
    }
}

?>
