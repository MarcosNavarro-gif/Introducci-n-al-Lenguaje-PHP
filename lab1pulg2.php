<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Leer la entrada de pulgadas del usuario
        $pulgadas = $_POST['pulgadas'];

        // Constante de conversión
        $FACTOR_CONVERSION = 2.54;

        // Cálculo de pulgadas a centímetros
        $centimetros = $pulgadas * $FACTOR_CONVERSION;

        // Imprimir el resultado
        echo "<h3>Resultado:</h3>";
        echo "<p><strong>$pulgadas</strong> pulgadas equivalen a <strong>$centimetros</strong> centímetros.</p>";
    }
?>