<?php

/* 
--------------------------------------------------------
EXPLICACIÓN RÁPIDA

✅ try {}
Intenta ejecutar código. Si hay error, salta al catch.

⚠️ catch (TipoError $e) {}
Atrapa el error. $e->getMessage() da detalles del problema.

⛔ throw new
Lanza una excepción manualmente.

🔚 finally {}
Se ejecuta siempre al final. Ideal para limpiar cosas.

📦 Tipos de error:
- Exception
- InvalidArgumentException
- OutOfRangeException
- Error (nativo de PHP)

--------------------------------------------------------
*/


// 🧪 1. Manejar un error común: División por cero
try {
    $resultado = 10 / 0; // ERROR: División por cero
    echo "Resultado: $resultado";
} catch (DivisionByZeroError $error) {
    echo "❌ Error: División por cero\n";
    echo "📩 Mensaje: " . $error->getMessage() . "\n";
}


// 🧪 2. Error por índice inexistente en array
try {
    $lista = [1, 2, 3];
    echo $lista[10]; // ERROR: índice fuera de rango
} catch (Error $error) {
    echo "❌ Error: Índice fuera del arreglo\n";
    echo "📩 Mensaje: " . $error->getMessage() . "\n";
}


// 🛠️ 3. Excepciones Personalizadas

//  Creamos nuestra propia clase de error
class ErrorPersonalizado extends Exception {}

function procesar($valor) {
    if (!is_numeric($valor)) {
        throw new InvalidArgumentException("Debe ser un número");
    }

    if ($valor < 0) {
        throw new OutOfRangeException("El número no puede ser negativo");
    }

    if ($valor === 13) {
        throw new ErrorPersonalizado("El número 13 no está permitido");
    }

    return $valor * 2;
}


// 🧪 Prueba de función con manejo de errores
try {
    $resultado = procesar(13);
    echo "Resultado procesado: $resultado\n";
} catch (InvalidArgumentException $error) {
    echo "❌ Error: Argumento inválido\n";
    echo "📩 Mensaje: " . $error->getMessage() . "\n";
} catch (OutOfRangeException $error) {
    echo "❌ Error: Número fuera de rango\n";
    echo "📩 Mensaje: " . $error->getMessage() . "\n";
} catch (ErrorPersonalizado $error) {
    echo "❌ Error: Personalizado\n";
    echo "📩 Mensaje: " . $error->getMessage() . "\n";
} catch (Exception $error) {
    echo "❌ Error general\n";
    echo "📩 Mensaje: " . $error->getMessage() . "\n";
} finally {
    echo "🔚 La ejecución ha finalizado\n";
}

?>
