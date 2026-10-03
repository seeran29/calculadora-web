<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';
    $resultado = null;

    switch ($operacion) {
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;

        case 'division':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: División por cero no permitida.";
            }
            break;
    }


    include 'index.html';

    if ($resultado !== null) {
        echo "<div style='text-align:center; margin-top: 15px;'>";
        echo "<h3>Resultado: " . htmlspecialchars($resultado) . "</h3>";
        echo "</div>";
    }
}
?>