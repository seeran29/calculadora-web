<?php

// 1. Funciones para cada operación
function sumar(float $a, float $b): float {
    return $a + $b;
}

function restar(float $a, float $b): float {
    return $a - $b;
}

function multiplicar(float $a, float $b): float {
    return $a * $b;
}

function dividir(float $a, float $b) {
    if ($b == 0) {
        return "Error: División por cero no permitida.";
    }
    return $a / $b;
}

// 2. Manejo de las solicitudes del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';
    $resultado = null;

    switch ($operacion) {
        case 'suma':
            $resultado = sumar($num1, $num2);
            break;

        case 'resta':
            $resultado = restar($num1, $num2);
            break;

        case 'multiplicacion':
            $resultado = multiplicar($num1, $num2);
            break;

        case 'division':
            $resultado = dividir($num1, $num2);
            break;

        default:
            $resultado = "Operación no válida.";
            break;
    }

    // Incluir la vista de la calculadora
    include 'index.htm';

    // Mostrar el resultado devuelto
    if ($resultado !== null) {
        echo "<div style='text-align:center; margin-top: 15px;'>";
        echo "<h3>Resultado: " . htmlspecialchars((string)$resultado) . "</h3>";
        echo "</div>";
    }
}
?>