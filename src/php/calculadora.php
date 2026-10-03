<?php

// Funcionalidades de suma y resta
function sumar(float $a, float $b): float {
    return $a + $b;
}

function restar(float $a, float $b): float {
    return $a - $b;
}

// Manejo de las solicitudes del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['num1'], $_POST['num2'], $_POST['operacion'])) {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = null;

        switch ($operacion) {
            case 'suma':
                $resultado = sumar($num1, $num2);
                echo "<h3>Resultado: $num1 + $num2 = $resultado</h3>";
                break;

            case 'resta':
                $resultado = restar($num1, $num2);
                echo "<h3>Resultado: $num1 - $num2 = $resultado</h3>";
                break;

            default:
                // Ignorar o notificar operaciones aún no implementadas en esta rama
                echo "<h3>Operación no disponible en esta versión.</h3>";
                break;
        }
    }
}
?>


