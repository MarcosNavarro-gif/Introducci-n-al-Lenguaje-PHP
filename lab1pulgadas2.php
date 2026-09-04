<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Conversor de Pulgadas</title>
    <link rel="stylesheet" href="lab1pulg-estilo.css">
</head>

<body>

```
<div class="contenedor">

    <h2>Resultado</h2>

    <?php

    // Leer la entrada de pulgadas
    $pulgadas = (float)$_POST['pulgadas'];

    // Constante de conversión
    $FACTOR_CONVERSION = 2.54;

    // Cálculo de pulgadas a centímetros
    $centimetros = $pulgadas * $FACTOR_CONVERSION;

    ?>

    <div class="resultado">

        <p>
            <strong><?php echo $pulgadas; ?></strong>
            pulgadas equivalen a
            <strong><?php echo round($centimetros, 2); ?></strong>
            centímetros.
        </p>

    </div>

    <a href="lab1pulgadas.php">
        <button>Volver</button>
    </a>

</div>
```

</body>
</html>
