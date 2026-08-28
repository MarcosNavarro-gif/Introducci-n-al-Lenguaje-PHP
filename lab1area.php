<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el radio ingresado
        $radio = (float)$_POST['radio'];

        // 2º Calcule el área de la circunferencia (pi * r^2)
        $area = M_PI * pow($radio, 2);

        // 3º Muestre por pantalla el resultado (dato real)
        echo "<h3>Resultado:</h3>";
        echo "El área de la circunferencia con radio <strong>$radio</strong> es: <strong>" . round($area, 2) . "</strong>";
    }
    ?>