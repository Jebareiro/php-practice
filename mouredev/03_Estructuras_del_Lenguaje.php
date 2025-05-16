/*
 * EJERCICIO:
 * - Muestra ejemplos de creación de todas las estructuras soportadas por defecto
 *   en tu lenguaje.
 * - Utiliza operaciones de inserción, borrado, actualización y ordenación.
 */

<?php

echo "Variables y Tipos de Datos";
echo "<br>";
$entero = 10;
$decimal = 3.14;
$cadena = "Hola Mundo";
$booleano = true;
$array = [1, 2, 3];

//---------------------------

echo "Entero: $entero <br>";
echo "Decimal: $decimal <br>";
echo "Cadena: $cadena <br>";
echo "Booleano: " . ($booleano ? "true" : "false") . "<br>";

echo "Array: ";
print_r($array); # print_r → muestra arrays u objetos de forma legible
echo "<br><br>";

//------------------------CONDICIONALES

echo "Condicionales-----";
echo "<br>";
$edad = 20;

if ($edad >= 18) {
    echo "Mayor de edad";
} elseif ($edad >= 13) {
    echo "Adolescente";
} else {
    echo "Niño";
}
echo "<br><br>";

//--------------------------SWITCH (case) - Multiples opciones

echo "Switch";
echo "<br>";
$color = "rojo";

switch ($color) {
    case "rojo":
        echo "El color es rojo";
        break;
    case "azul":
        echo "El color es azul";
        break;
    default:
        echo "Color Desconocido";
}
echo "<br><br>";

//-----------------Bucles - While
echo "Bucles";
echo "<br>";

$i = 0;
echo "Bucle While: ";
while ($i < 3) {
    echo "$i ";
    $i++;
}
echo "<br>";

// do-while -> igual que while pero ejecuta al menos una vez
$j = 0;
echo "Bucle do-while: ";

do {
    echo "$j ";
    $j++;
} while ($j < 3);
echo "<br>";

// for -> bucle clasico con contador
echo "FOR----";
echo "<br>";
for ($k = 0; $k < 3; $k++) {
    echo "$k ";
}
echo "<br>";

//------------------- Foreach -- recorre arrays
$colores = ["rojo", "verde", "azul"];
echo "Bucle foreach: ";
foreach ($colores as $c) {
    echo "$c ";
}
echo "<br><br>";

//--------------Funciones
echo "Funciones---";
echo "<br>";

// funcion que recibe un nombre y retorna un saludo
function saludar($nombre) {
    return "Hola, $nombre <br>";
}
echo saludar("PHP");

// Clases y objetos

echo "Clases y Objetos";
echo "<br>";

class Persona {
    public $nombre;

    function __construct($nombre) {
        $this->nombre = $nombre;
    }

    function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}

$persona = new Persona("Juan");
echo $persona->saludar();
echo "<br><br>";

// ------- Operaciones con Arrays
$nums = [3, 1, 4];

echo "Array Original: ";
print_r($nums);
echo "<br>";

//------- Insercion -> agrega un elemento al final
array_push($nums, 2);
echo "Despues de insertar 2: ";
print_r($nums);
echo "<br>";

//------ Borrado -> elimina el índice 1 (el segundo elemento)
unset($nums[1]);
echo "Despues de borrar el indice 1: ";
print_r($nums);
echo "<br>";

//------- Actualizacion -> cambia el valor del indice 0
$nums[0] = 99;
echo "Despues de actualizar indice 0 a 99: ";
print_r($nums);
echo "<br>";

// Ordenacion --> ordena de menor a mayor
sort($nums);
echo "Despues de Ordenar: ";
print_r($nums);
echo "<br>";

/*

PHP	            |  Python	    | Acción
-------------------------------------------------------
array_push()	|  append() 	| Agregar al final
array_pop()	    |  pop()	    | Quitar último
unset()         |  del	        | Borrar variable o elemento
$this	        |  self	        | Referencia a instancia
__construct()	| __init__()	| Constructor de clase

*/

# ----------------------------------------


/* DIFICULTAD EXTRA (opcional):
Crea una agenda de contactos por terminal.
- Debes implementar funcionalidades de búsqueda, inserción, actualización
    y eliminación de contactos.
- Cada contacto debe tener un nombre y un número de teléfono.
- El programa solicita en primer lugar cuál es la operación que se quiere realizar,
    y a continuación los datos necesarios para llevarla a cabo.
- El programa no puede dejar introducir números de teléfono no numéricos y con más
    de 11 dígitos (o el número de dígitos que quieras).
  - También se debe proponer una operación de finalización del programa. */




$agenda = [];

function mostrar_menu() {
    echo "\nAGENDA DE CONTACTOS\n";
    echo "1. Ver Contactos\n";
    echo "2. Agregar contacto\n";
    echo "3. Buscar contacto\n";
    echo "4. Actualizar contacto\n";
    echo "5. Eliminar contacto\n";
    echo "6. Salir\n";
    echo "Elige una opcion: ";
}

function validar_telefono($telefono) {
    return is_numeric($telefono) && strlen($telefono) <= 11;
}

do {
    mostrar_menu();
    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case 1:
            if (empty($agenda)) {
                echo "Agenda Vacía\n";
            } else {
                foreach ($agenda as $nombre => $telefono) {
                    echo "Nombre: $nombre - Teléfono: $telefono\n";
                }
            }
            break;

        case 2:
            echo "Nombre: ";
            $nombre = trim(fgets(STDIN));
            echo "Teléfono: ";
            $telefono = trim(fgets(STDIN));
            if (validar_telefono($telefono)) {
                $agenda[$nombre] = $telefono;
                echo "Contacto agregado\n";
            } else {
                echo "Teléfono inválido\n";
            }
            break;

        case 3:
            echo "Buscar nombre: ";
            $buscar = trim(fgets(STDIN));
            if (isset($agenda[$buscar])) {
                echo "Nombre: $buscar - Teléfono: " . $agenda[$buscar] . "\n";
            } else {
                echo "Contacto no encontrado\n";
            }
            break;

        case 4:
            echo "Nombre a actualizar: ";
            $nombre = trim(fgets(STDIN));
            if (isset($agenda[$nombre])) {
                echo "Nuevo teléfono: ";
                $telefono = trim(fgets(STDIN));
                if (validar_telefono($telefono)) {
                    $agenda[$nombre] = $telefono;
                    echo "Contacto actualizado\n";
                } else {
                    echo "Teléfono inválido\n";
                }
            } else {
                echo "Contacto no encontrado\n";
            }
            break;

        case 5:
            echo "Nombre a eliminar: ";
            $nombre = trim(fgets(STDIN));
            if (isset($agenda[$nombre])) {
                unset($agenda[$nombre]);
                echo "Contacto eliminado\n";
            } else {
                echo "Contacto no encontrado\n";
            }
            break;

        case 6:
            echo "Saliendo...\n";
            break;

        default:
            echo "Opción inválida\n";
            break;
    }
} while ($opcion != 6);



/* PHP              | Python	         | Qué hace
---------------------------------------------------------------------------------------
is_numeric("123")	| "123".isnumeric()	 | Verifica si es un número (mejor en PHP)
strlen("hola")      | 	len("hola")      | 	Largo de un string
trim(" hola ")      | 	" hola ".strip() | 	Elimina espacios al inicio/fin
fgets(STDIN)	    | input()	         | Leer entrada de consola
empty($var)	        | not var	         | Verifica si está vacío 
isset(...)	        | "x" in dict	     | Verifica si una clave existe
unset(...)	        | del dict["x"]	     | Elimina una entrada del array
*/
?>
