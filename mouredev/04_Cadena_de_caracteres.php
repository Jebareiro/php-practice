<?php

/*
 * EJERCICIO:
 * Muestra ejemplos de todas las operaciones que puedes realizar con cadenas de caracteres
 * en tu lenguaje. Algunas de esas operaciones podrían ser (busca todas las que puedas):
 * - Acceso a caracteres específicos, subcadenas, longitud, concatenación, repetición,
 *   recorrido, conversión a mayúsculas y minúsculas, reemplazo, división, unión,
 *   interpolación, verificación...
 */

// 1. Acceso a caracteres específicos
$texto = "Hola Mundo";
echo "Texto original: $texto\n";
// Accedemos al primer carácter (posición 0)
echo "Primer carácter: " . $texto[0] . "\n";
// Accedemos al último carácter usando strlen para saber la longitud
echo "Último carácter: " . $texto[strlen($texto) - 1] . "\n";

// 2. Subcadenas
// Obtenemos los 3 primeros caracteres (posición 0 a 2)
echo "Subcadena (3 primeros caracteres): " . substr($texto, 0, 3) . "\n";
// Obtenemos la subcadena desde la posición 5 hasta el final
echo "Subcadena (desde la posición 5): " . substr($texto, 5) . "\n";

// 3. Longitud
// Mostramos la cantidad de caracteres que tiene el texto
echo "Longitud de texto: " . strlen($texto) . "\n";

// 4. Concatenación
// Unimos dos cadenas usando el operador "."
$saludo = "Hola";
$nombre = "Ana";
echo "Concatenación: " . $saludo . " " . $nombre . "\n";

// 5. Repetición
// Repetimos una cadena 3 veces
echo "Repetir 'PHP' 3 veces: " . str_repeat("PHP ", 3) . "\n";

// 6. Recorrido (for)
// Recorremos la cadena carácter por carácter
echo "Recorrer cada carácter: ";
for ($i = 0; $i < strlen($texto); $i++) {
    echo $texto[$i] . " ";
}
echo "\n";

// 7. Conversión a mayúsculas y minúsculas
echo "Mayúsculas: " . strtoupper($texto) . "\n"; // Convierte todo a mayúsculas
echo "Minúsculas: " . strtolower($texto) . "\n"; // Convierte todo a minúsculas

// 8. Reemplazo
// Cambia la palabra "Mundo" por "PHP" dentro del texto
echo "Reemplazar 'Mundo' por 'PHP': " . str_replace("Mundo", "PHP", $texto) . "\n";

// 9. División
// Separa una cadena en partes usando como separador ", "
$frase = "Uno, dos, tres, cuatro";
$array_palabras = explode(", ", $frase);
echo "Array después de explode:\n";
print_r($array_palabras);

// 10. Unión
// Junta los elementos de un array en una sola cadena
$union = implode(" - ", $array_palabras);
echo "Cadena después de implode: $union\n";

// 11. Interpolación
// Inserta variables directamente dentro de una cadena
$variable = "mundo";
echo "Interpolación: Hola $variable\n";

// 12. Verificación (strpos)
// Verifica si una subcadena está presente en otra
if (strpos($texto, "Mundo") !== false) {
    echo "La palabra 'Mundo' sí está en el texto\n";
} else {
    echo "No está 'Mundo' en el texto\n";
}

/* * DIFICULTAD EXTRA (opcional):
 * Crea un programa que analice dos palabras diferentes y realice comprobaciones
 * para descubrir si son:
 * - Palíndromos
 * - Anagramas
 * - Isogramas */

/*
 * ¿Qué significa cada uno?
 *
 * - Palíndromo: palabra o frase que se lee igual al derecho y al revés.
 *   Ejemplo: "reconocer", "anilina", "oso"
 *
 * - Anagrama: dos palabras que tienen las mismas letras pero en distinto orden.
 *   Ejemplo: "amor" y "roma", "perro" y "porre"
 *
 * - Isograma: palabra en la que ninguna letra se repite.
 *   Ejemplo: "murciélago", "pingües"
 */


// Función para saber si una palabra es palíndromo (se lee igual al revés)
function es_palindromo($palabra) {
    // Convertimos a minúsculas y eliminamos caracteres que no sean letras
    $palabra = strtolower(preg_replace("/[^a-z]/", "", $palabra));
    // Comparamos la palabra original con su reversa
    return $palabra === strrev($palabra);
}

// Función para saber si dos palabras son anagramas (tienen las mismas letras en distinto orden)
function son_anagramas($palabra1, $palabra2) {
    // Convertimos a minúsculas y quitamos caracteres que no sean letras
    $palabra1 = strtolower(preg_replace("/[^a-z]/", "", $palabra1));
    $palabra2 = strtolower(preg_replace("/[^a-z]/", "", $palabra2));
    
    // Si las longitudes no coinciden, no pueden ser anagramas
    if (strlen($palabra1) != strlen($palabra2)) return false;

    // Convertimos a arrays de letras y ordenamos
    $array1 = str_split($palabra1);
    $array2 = str_split($palabra2);
    sort($array1);
    sort($array2);

    // Comparamos los arrays ordenados
    return $array1 === $array2;
}

// Función para saber si una palabra es isograma (no tiene letras repetidas)
function es_isograma($palabra) {
    // Convertimos a minúsculas y quitamos caracteres que no sean letras
    $palabra = strtolower(preg_replace("/[^a-z]/", "", $palabra));
    $letras = str_split($palabra);
    // Si el número de letras es igual al número de letras únicas => no hay repetidas
    return count($letras) === count(array_unique($letras));
}

// Entrada desde consola (modo interactivo)
echo "\n--- Analizador de Palabras ---\n";
echo "Palabra 1: ";
$palabra1 = trim(fgets(STDIN)); // Leemos palabra 1 del usuario
echo "Palabra 2: ";
$palabra2 = trim(fgets(STDIN)); // Leemos palabra 2 del usuario

// Mostramos resultados de los análisis
echo "\nResultados:\n";
echo "¿Palabra 1 es palíndromo? " . (es_palindromo($palabra1) ? "Sí" : "No") . "\n";
echo "¿Palabra 2 es palíndromo? " . (es_palindromo($palabra2) ? "Sí" : "No") . "\n";
echo "¿Son anagramas? " . (son_anagramas($palabra1, $palabra2) ? "Sí" : "No") . "\n";
echo "¿Palabra 1 es isograma? " . (es_isograma($palabra1) ? "Sí" : "No") . "\n";
echo "¿Palabra 2 es isograma? " . (es_isograma($palabra2) ? "Sí" : "No") . "\n";

