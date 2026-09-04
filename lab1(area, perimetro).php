<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Área y Perímetro</title>
    <link rel="stylesheet" href="lab1estilo.css">
</head>

<body>

```
<!-- Contenedor principal de la página -->
<div class="contenedor">

    <h2>Laboratorio #1</h2>

    <p>Calcular el área y el perímetro de una circunferencia a partir de su radio.</p>

    <form method="POST" action="lab1(area, perimetro)2.php">

        <label for="radio">
            Introduzca el radio de la circunferencia:
        </label>

        <!-- Campo donde el usuario introduce la cantidad de pulgadas --> 
        <!-- step="any" permite ingresar números decimales -->
        <input 
            type="number" 
            step="any" 
            id="radio" 
            name="radio" 
            min="0"
            required
        >

        <br>

        <button type="submit">Calcular</button>

    </form>

</div>
```

</body>
</html>
