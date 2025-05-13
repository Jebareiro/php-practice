<?php
/*
 * EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *   Aritméticos, lógicos, de comparación, asignación, identidad, pertenencia, bits...
 */

/* * - Utilizando las operaciones con operadores que tú quieras, crea ejemplos
 *   que representen todos los tipos de estructuras de control que existan
 *   en tu lenguaje:
 *   Condicionales, iterativas, excepciones...
 */

echo "Operadores Aritmeticos: ";
echo "<br/>";
echo "Suma: 10 + 7 = " . (10 + 7) . "<br/>";
echo "Resta: 10 - 5 = " . (10 - 5) . "<br/>";
echo "Multiplicacion: 10 * 2 = " . (10 * 2) . "<br/>";
echo "Division: 10 / 2 = " . (10 / 2) . "<br/>";
echo "Exponentes: 10 ** 3 = " . (10 ** 3) . "<br/>";
echo "<br/>";

echo "----Operadores de Asignacion----";
echo "<br/>";
$numero = 42;
$mensaje = "Hola Mundo";

echo "----Asignacion y Suma----";
echo "<br/>";
$contador = 5;
$contador += 3;
echo "Contador += 3 => $contador<br/>";

echo "----Asignacion y Resta----";
echo "<br/>";
$asignacion_resta = 10;
$asignacion_resta -= 3;
echo "Resta => $asignacion_resta<br/>";

echo "----Asignacion y Multiplicacion----";
echo "<br/>";
$asignacion_multiplicacion = 4;
$asignacion_multiplicacion *= 3;
echo "Multiplicacion => $asignacion_multiplicacion<br/>";

echo "----Asignacion y Division----";
echo "<br/>";
$asignacion_division = 15;
$asignacion_division /= 3;
echo "Division => $asignacion_division<br/>";

echo "----Asignacion y Modulo----";
echo "<br/>";
$asignacion_modulo = 15;
$asignacion_modulo %= 4;
echo "Modulo => $asignacion_modulo<br/>";

echo "----Asignacion y Exponente (**=)----";
echo "<br/>";
$asignacion_expo = 2;
$asignacion_expo **= 3;
echo "Exponente => $asignacion_expo<br/>";

//---------------------------------------------

echo "----Operadores de Comparacion / Operadores Logicos----";
echo "<br/>";
echo "----Igual---- ( == )<br/>";

$a = 10;
$b = 10;

if ($a == $b) {
    echo "los valores coinciden<br/>";
} else {
    echo "Los valores no coinciden<br/>";
}

echo "----Diferente (!= o <>)----<br/>";
$c = 10;
$d = 20;

if ($c != $d) {
    echo "Los Valores son diferentes<br/>";
} else {
    echo "Los Valores son iguales<br/>";
}

echo "---- Mayor o Menor que (< >)----<br/>";
$e = 40;
$f = 30;

if ($e > $f) {
    echo "E es mayor que F<br/>";
} else {
    echo "F es mayor que E<br/>";
}

echo "---- Mayor o Igual ( >= )----<br/>";
$g = 10;
$h = 11;

if ($g >= $h) {
    echo "G es mayor o igual que H<br/>";
} else {
    echo "H es mayor o igual que G<br/>";
}

echo "AND (&& o and)<br/>";
$edad = 23;
$nombre = "Jessica";

if ($edad >= 18 && $nombre == "Jessica") {
    echo "Los datos coinciden<br/>";
} else {
    echo "Los Datos no coinciden<br/>";
}

$j = 10;
$k = 5;
$l = 20;

if ($j > $k && $k < $l) {
    echo "El valor está entre el valor de j y l<br/>";
} else {
    echo "El valor de j no está entre el valor de k y l<br/>";
}

echo "---- OR  - || ----<br/>";
$m = 10;
$n = 4;
$o = 20;

if ($a > $b || $a > $c) {
    echo "El valor de a es mayor que el valor de b o c<br/>";
} else {
    echo "El valor de a no es mayor que el valor de b ni c<br/>";
}

echo "---- XOR -----<br/>";
$p = true;
$q = false;

if ($p xor $q) {
    echo "Solo una de las variables es verdadera.<br/>";
}

echo "---- Concatenación ----<br/>";
$nombre = "Jessica";
$apellido = "Bareiro";
$nombre_completo = $nombre . " " . $apellido;

echo $nombre_completo . "<br/>";

//-------------------------------------

echo "Estructura de Control<br/>";
echo "----Condicionales----<br/>";
echo "if<br/>";
echo "elseif<br/>";
echo "else<br/>";

echo "----Switch---- (case)<br/>";
$fruta = "manzana";

switch ($fruta) {
    case "naranja":
        echo "La fruta es una naranja<br/>";
        break;
    case "manzana":
        echo "La fruta es manzana<br/>";
        break;
    case "limon":
        echo "La fruta es un limon<br/>";
        break;
}

echo "----While----<br/>";
$numero = 4;

while ($numero <= 10) {
    echo $numero++ . "<br/>";
}

echo "----do - while----<br/>";
$numero = 10;

do {
    echo $numero . "<br/>";
    $numero++;
} while ($numero <= 5);

echo "----for----<br/>";
for ($numero = 1; $numero <= 10; $numero++) {
    echo $numero . "<br/>";
}

echo "----foreach----<br/>";
$array = array(1, 2, 10, 9);

foreach ($array as $valor) {
    echo $valor . "<br/>";
}

//--------------------------------------

/* DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
 */

echo "Dificultad Extra<br/>";
for ($i = 10 ; $i <= 55 ; $i++) {
    if ($i % 2 === 0 && $i !== 16 && $i % 3 !== 0) {
        echo $i . "<br/>";
    }
}

