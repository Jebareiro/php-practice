
/*
- Crea ejemplos de funciones básicas que representen las diferentes
posibilidades del lenguaje: 

 *   Sin parámetros ni retorno, con uno o varios parámetros, con retorno...
 * - Comprueba si puedes crear funciones dentro de funciones.
 * - Utiliza algún ejemplo de funciones ya creadas en el lenguaje.
 * - Pon a prueba el concepto de variable LOCAL y GLOBAL.
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 *   (y tener en cuenta que cada lenguaje puede poseer más o menos posibilidades)  */


  echo "FUNCIONES" . "<br/>"; # Imprime la palabra funciones 

/* echo: puede imprimir varios valores separados por comas.
		echo "Hola", " ", "Mundo";
	print: solo acepta un argumento y retorna 1
    	print "Hola" . "Mundo";
        print("Hola");
*/
    
    
// -------------- FUNCION SIMPLE -----

echo "----Funcion Simple----";
echo "<br/>";

 function ejemplo(){
 		echo "Mi funcion". "\n";
 }

echo ejemplo();
echo "<br/>";
  

// ------------- FUNCION CON PARAMETRO

echo "----Funcion con Parametro----";
echo "<br/>";

function ejemplo_con_parametro($name){
		echo "Mi nombre es ". $name . "\n";
}

echo ejemplo_con_parametro("Jessica");
echo "<br/>";

// ------------- FUNCION CON PARAMETRO POR DEFECTO
echo "----Funcion con Parametro por Defecto----";
echo "<br/>";

function ejemplo_funcion_default($parametro1 = "Name", $parametro2 = "LastName"){
		echo "Mi nombre y apellido es: " . $parametro1. "\n" . $parametro2;
}

ejemplo_funcion_default();
echo "<br/>";


/* Se llama "Por defecto" porque por mas que no le pases ningun argumento 
este te da por defecto los valores que diste antes
Mi nombre y apellido es: Name LastName */

// ----------------------------------

echo "---- Funciones con Parametros ---- ";
echo "<br/>";


function ejemplo_funcion_con_parametros($name, $lastname){
	echo "Mi nombre y Apellido es: " .$name ."\n" . $lastname . "<br/>";  
}
echo ejemplo_funcion_con_parametros("Jessica", "Bareiro");


// ------------------ Funcion con Parametro y retorno
echo "----Funcion con Parametro y Retorno ----";
echo "<br/>";

function funcion_de_retorno($num1, $num2){
	return $num1 + $num2;
}

$suma = funcion_de_retorno(10, 11);
	echo "El resultado de la suma es: " . $suma;
  
echo "<br/>";


// ------------ Funcion Dentro de otra Funcion
echo "---Funcion dentro de otra funcion---";
echo "<br/>";

function funcion_uno(){
	function funcion_dos(){
    	echo "Esta es una funcion dentro de otra funcion";
    }
  	funcion_dos();
}
funcion_uno();
echo "<br/>";

// ------------ Ejemplos de funciones ya creadas en el lenguaje
echo "<br/>";
echo "· · · Funciones ya Creadas · · ·";
echo "<br/>";

$numeros = [1, 2, 3, 4, 5];
$cuadrados = [];

foreach ($numeros as $numero){
    $cuadrado = $numero * $numero;
    $cuadrados[] = $cuadrado;
}

echo "Cuadrados: " . implode(", ", $cuadrados);

echo "<br/>";


/*
 
 * DIFICULTAD EXTRA (opcional):
 * Crea una función que reciba dos parámetros de tipo cadena de texto y retorne un número.
 * - La función imprime todos los números del 1 al 10. Teniendo en cuenta que:
 *   - Si el número es múltiplo de 3, muestra la cadena de texto del primer parámetro.
 *   - Si el número es múltiplo de 5, muestra la cadena de texto del segundo parámetro.
 *   - Si el número es múltiplo de 3 y de 5, muestra las dos cadenas de texto concatenadas.
 *   - La función retorna el número de veces que se ha impreso el número en lugar de los textos.

*/

echo "<br/>";

function print_numbers($text1, $text2) {
    $contador = 0;

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo $text1 . $text2 . "\n";
        } elseif ($i % 3 == 0) {
            echo $text1 . "\n";
        } elseif ($i % 5 == 0) {
            echo $text2 . "\n";
        } else {
            echo $i . "\n";
            $contador++;
        }
    }

    return $contador;
}

$cuenta = print_numbers("Fizz", "Buzz");
echo "cantidad de veces que se imprimio un numero: $cuenta\n";
