<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Laboratorio #1</title>

```
<link rel="stylesheet" href="lab1estilo.css">
```

</head>

<body>

```
<div class="contenedor">

    <h2>Resultado</h2>

    <?php

    // Obtener el radio ingresado
    $radio = (float)$_POST['radio'];

    // Calcular el área
    $area = M_PI * pow($radio, 2);

    // Calcular el perímetro
    $perimetro = 2 * M_PI * $radio;

    ?>

    <div class="resultado">

        <h3>Resultados de la circunferencia</h3>

        <p>
            Radio:
            <strong><?php echo $radio; ?></strong>
        </p>

        <p>
            Área:
            <strong><?php echo round($area, 2); ?></strong>
        </p>

        <p>
            Perímetro:
            <strong><?php echo round($perimetro, 2); ?></strong>
        </p>

    </div>

    <br>

    <a href="lab1(area, perimetro).php">
        <button>Volver</button>
    </a>

</div>
```

</body>
</html>
