<?php


/*
 * EJERCICIO:
 * Explora el concepto de herencia según tu lenguaje. Crea un ejemplo que
 * implemente una superclase Animal y un par de subclases Perro y Gato,
 * junto con una función que sirva para imprimir el sonido que emite cada Animal.
 */


class Animal {
    public $nombre;

    // 🔧 Constructor base
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // 🔊 Método genérico
    public function hacerSonido() {
        echo "Este animal hace un sonido\n";
    }
}

// 🐶 Clase Perro (hereda de Animal)
class Perro extends Animal {
    public function hacerSonido() {
        echo "$this->nombre dice: Guau\n";
    }
}

// 🐱 Clase Gato (hereda de Animal)
class Gato extends Animal {
    public function hacerSonido() {
        echo "$this->nombre dice: Miaau\n";
    }
}

// 🧪 Prueba de clases
$perro = new Perro("Chiruzo");
$gato = new Gato("Michi");

$perro->hacerSonido();
$gato->hacerSonido();


/*
* DIFICULTAD EXTRA (opcional):
 * Implementa la jerarquía de una empresa de desarrollo formada por Empleados que
 * pueden ser Gerentes, Gerentes de Proyectos o Programadores.
 * Cada empleado tiene un identificador y un nombre.
 * Dependiendo de su labor, tienen propiedades y funciones exclusivas de su
 * actividad, y almacenan los empleados a su cargo.
 */

// Clase base Empleado
class Empleado {
    public $id;
    public $nombre;

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function info() {
        echo "Empleado: $this->nombre (ID: $this->id)\n";
    }
}

// 🧠 Clase Gerente (hereda de Empleado)
class Gerente extends Empleado {
    public $empleadosACargo = [];

    public function agregarEmpleados(Empleado $empleado) {
        $this->empleadosACargo[] = $empleado;
    }

    public function listarEmpleados() {
        echo "Gerente $this->nombre tiene a cargo:\n";
        foreach ($this->empleadosACargo as $emp) {
            echo " - {$emp->nombre} (ID: {$emp->id})\n";
        }
    }
}

// 📂 Clase Gerente de Proyecto
class GerenteProyecto extends Empleado {
    public $proyecto;

    public function asignarProyecto($proyecto) {
        $this->proyecto = $proyecto;
    }

    public function info() {
        echo "Gerente de Proyecto: $this->nombre - Proyecto: $this->proyecto\n";
    }
}

// 👨‍💻 Clase Programador
class Programador extends Empleado {
    public $lenguaje;

    public function setLenguaje($lenguaje) {
        $this->lenguaje = $lenguaje;
    }

    public function info() {
        echo "Programador: $this->nombre - Lenguaje: $this->lenguaje\n";
    }
}


// 🧪 ------------------------
// PARTE 3: INSTANCIAS Y USO
// ------------------------

$dev1 = new Programador(16, "Jessi");
$dev1->setLenguaje("PHP");

$dev2 = new Programador(33, "Lucas");
$dev2->setLenguaje("Python");

$employee = new GerenteProyecto(210, "Laura");
$employee->asignarProyecto("WebSite Corporativo");

$manager = new Gerente(301, "Juan");
$manager->agregarEmpleados($dev1);
$manager->agregarEmpleados($dev2);
$manager->agregarEmpleados($employee);

// 🖨️ Mostrar información
$dev1->info();
$dev2->info();
$employee->info();
$manager->listarEmpleados();

?>
