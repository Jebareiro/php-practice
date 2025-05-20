<?php

/* DIFICULTAD EXTRA (opcional):
 * - Utilizando la implementación de pila y cadenas de texto, simula el mecanismo adelante/atrás
 *   de un navegador web. Crea un programa en el que puedas navegar a una página o indicarle
 *   que te quieres desplazar adelante o atrás, mostrando en cada caso el nombre de la web.
 *   Las palabras "adelante", "atrás" desencadenan esta acción, el resto se interpreta como
 *   el nombre de una nueva web. */


//  (pila – LIFO).

$historial_atras = [];
$historial_adelante = [];
$pagina_actual = null;

/* -------------------------------------------------------

Memoria Auxiliar:

🧼 trim($texto) : Elimina espacios en blanco (y saltos de línea)
al inicio y al final del texto.

📥 fgets(STDIN) : Lee una línea ingresada 
por el usuario desde la terminal (input).

📦 STDIN : Es una constante que representa la entrada estándar 
(o sea, la terminal). Se usa con fgets.

❗ !empty($var) : Verifica si NO está vacía una variable 
(es decir, tiene algo).

----------------------------------------------------------- */

while (true) {
    echo "Pagina actual: " . ($pagina_actual ?? "Ninguna") . "\n"; // Si es null, usá "Ninguna".
    echo "Ingrese una pagina web, 'atras', 'adelante' o 'salir': ";
    $entrada = trim(fgets(STDIN)); // INPUT

    // 🛑 Opción: salir
    if ($entrada === "salir") {
        echo "Saliendo del navegador.\n";
        break;

    // ⬅️ Opción: ir hacia atrás en el historial
    } elseif ($entrada === "atras") {
        if (!empty($historial_atras)) { 
            array_push($historial_adelante, $pagina_actual); // guardamos la actual en la pila "adelante"
            $pagina_actual = array_pop($historial_atras);    // sacamos la última de la pila "atrás"
        } else {
            echo "No hay paginas anteriores.\n";
        }

    // ➡️ Opción: ir hacia adelante en el historial
    } elseif ($entrada === "adelante") {
        if (!empty($historial_adelante)) {
            array_push($historial_atras, $pagina_actual); // guardamos la actual en la pila "atrás"
            $pagina_actual = array_pop($historial_adelante); // sacamos la última de la pila "adelante"
        } else {
            echo "No hay paginas siguientes.\n";
        }

    // 🌐 Opción: ingresar una nueva página
    } else {
        if ($pagina_actual !== null) {
            array_push($historial_atras, $pagina_actual); // guardamos la actual en la pila "atrás"
        }
        $pagina_actual = $entrada;

        // Limpiamos el historial hacia adelante porque cambiamos de ruta
        $historial_adelante = [];
    }
}

echo "\n";


// -------------------------------------------------------

/* Utilizando la implementación de cola y cadenas de texto, simula el mecanismo de una
 *   impresora compartida que recibe documentos y los imprime cuando así se le indica.
 *   La palabra "imprimir" imprime un elemento de la cola, el resto de palabras se
 *   interpretan como nombres de documentos.*/

// cola (FIFO)

$cola_impresion = [];

while (true) {
    // Mostramos el estado actual de la cola
    echo " Cola Actual: [" . implode(", ", $cola_impresion) . "]\n";
    echo " Ingrese un documento, 'imprimir' o 'salir': ";
    $entrada = trim(fgets(STDIN));

    // 🚪 Salir del programa
    if ($entrada === "salir") {
        echo "🛑 Cerrando impresora\n";
        break;

    // 🖨️ Imprimir documento (si hay en la cola)
    } elseif ($entrada === "imprimir") {
        if (!empty($cola_impresion)) {
            $documento = array_shift($cola_impresion); // saca el primero
            echo " Imprimiendo: $documento\n";
        } else {
            echo " No hay documentos para imprimir\n";
        }

    // 📥 Agregar documento a la cola
    } else {
        array_push($cola_impresion, $entrada); // Agrega al final
        echo "✅ Documento '$entrada' agregado a la cola\n";
    }

    echo "\n";
}

?>
