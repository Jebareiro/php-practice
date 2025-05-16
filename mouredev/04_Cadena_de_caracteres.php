<?php

/*
 * EJERCICIO:
 * Muestra ejemplos de todas las operaciones que puedes realizar con cadenas de caracteres
 */

// 1. Acceso a caracteres específicos
$texto = "Hola Mundo";
echo "Texto original: $texto\n";
echo "Primer carácter: " . $texto[0] . "\n";
echo "Último carácter: " . $texto[strlen($texto) - 1] . "\n";

// 2. Subcadenas
echo "Subcadena (3 primeros caracteres): " . substr($texto, 0, 3) . "\n";
echo "Subcadena (desde la posición 5): " . substr($texto, 5) . "\n";

// 3. Longitud
echo "Longitud de texto: " . strlen($texto) . "\n";

// 4. Concatenación
$saludo = "Hola";
$nombre = "Ana";
echo "Concatenación: " . $saludo . " " . $nombre . "\n";

// 5. Repetición
echo "Repetir 'PHP' 3 veces: " . str_repeat("PHP ", 3) . "\n";

// 6. Recorrido (for)
echo "Recorrer cada carácter: ";
for ($i = 0; $i < strlen($texto); $i++) {
    echo $texto[$i] . " ";
}
echo "\n";

// 7. Conversión a mayúsculas y minúsculas
echo "Mayúsculas: " . strtoupper($texto) . "\n";
echo "Minúsculas: " . strtolower($texto) . "\n";

// 8. Reemplazo
echo "Reemplazar 'Mundo' por 'PHP': " . str_replace("Mundo", "PHP", $texto) . "\n";

// 9. División
$frase = "Uno, dos, tres, cuatro";
$array_palabras = explode(", ", $frase);
echo "Array después de explode:\n";
print_r($array_palabras);

// 10. Unión
$union = implode(" - ", $array_palabras);
echo "Cadena después de implode: $union\n";

// 11. Interpolación
$variable = "mundo";
echo "Interpolación: Hola $variable\n";

// 12. Verificación (strpos)
if (strpos($texto, "Mundo") !== false) {
    echo "La palabra 'Mundo' sí está en el texto\n";
} else {
    echo "No está 'Mundo' en el texto\n";
}

/* DIFICULTAD EXTRA: Palíndromos, Anagramas, Isogramas */

function es_palindromo($palabra) {
    $palabra = strtolower(preg_replace("/[^a-z]/", "", $palabra));
    return $palabra === strrev($palabra);
}

function son_anagramas($palabra1, $palabra2) {
    $palabra1 = strtolower(preg_replace("/[^a-z]/", "", $palabra1));
    $palabra2 = strtolower(preg_replace("/[^a-z]/", "", $palabra2));
    if (strlen($palabra1) != strlen($palabra2)) return false;
    $array1 = str_split($palabra1);
    $array2 = str_split($palabra2);
    sort($array1);
    sort($array2);
    return $array1 === $array2;
}

function es_isograma($palabra) {
    $palabra = strtolower(preg_replace("/[^a-z]/", "", $palabra));
    $letras = str_split($palabra);
    return count($letras) === count(array_unique($letras));
}

// Entrada desde consola
echo "\n--- Analizador de Palabras ---\n";
echo "Palabra 1: ";
$palabra1 = trim(fgets(STDIN));
echo "Palabra 2: ";
$palabra2 = trim(fgets(STDIN));

// Resultados
echo "\nResultados:\n";
echo "¿Palabra 1 es palíndromo? " . (es_palindromo($palabra1) ? "Sí" : "No") . "\n";
echo "¿Palabra 2 es palíndromo? " . (es_palindromo($palabra2) ? "Sí" : "No") . "\n";
echo "¿Son anagramas? " . (son_anagramas($palabra1, $palabra2) ? "Sí" : "No") . "\n";
echo "¿Palabra 1 es isograma? " . (es_isograma($palabra1) ? "Sí" : "No") . "\n";
echo "¿Palabra 2 es isograma? " . (es_isograma($palabra2) ? "Sí" : "No") . "\n";
