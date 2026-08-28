<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = isset($_POST['num2']) && $_POST['num2'] !== '' ? $_POST['num2'] : 0;
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case "sumar":
                $resultado = $num1 + $num2;
                echo "<h3>Resultado: $num1 + $num2 = $resultado</h3>";
                break;

            case "restar":
                $resultado = $num1 - $num2;
                echo "<h3>Resultado: $num1 - $num2 = $resultado</h3>";
                break;

            case "multiplicar":
                $resultado = $num1 * $num2;
                echo "<h3>Resultado: $num1 × $num2 = $resultado</h3>";
                break;

            case "redondear":
                $resultado = round($num1);
                echo "<h3>Resultado: El número $num1 redondeado es $resultado</h3>";
                break;

            default:
                echo "<h3>Operación no válida.</h3>";
                break;
        }
    }
    ?>