<!DOCTYPE html>

<html lang="es">
<head>
    <!-- Configuración para permitir caracteres especiales como ñ y tildes -->
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Conversor de Pulgadas a Centímetros</title>
    <!-- Conexión del archivo HTML con el archivo CSS -->
    <link rel="stylesheet" href="lab1pulg-estilo.css">
</head>

<body>

```
<div class="contenedor">

    <h2>Laboratorio #1</h2>

    <p>Convertir pulgadas a centímetros</p>
    <p class="formula">1 pulgada = 2.54 cm</p>

    <form method="POST" action="lab1pulgadas2.php">

        <label for="pulgadas">Ingrese las pulgadas:</label>

        <input 
            type="number" 
            step="any" 
            id="pulgadas" 
            name="pulgadas" 
            required
        >

        <button type="submit">Convertir</button>

    </form>

</div>
```

</body>
</html>
