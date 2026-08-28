<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio #1 - Área de una Circunferencia</title>
</head>
<body>

    <h2>Laboratorio #1</h2>
    <p>Calcular el área de una circunferencia a partir de su radio.</p>

    <!-- 1º Pida el radio (dato real) -->
    <form method="POST" action="lab1area.php">
        <label for="radio">Introduzca el radio de la circunferencia:</label>
        <input type="number" step="any" id="radio" name="radio" required>
        <button type="submit">Calcular área</button>
    </form>

    <br>
</body>
</html>