<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema #2 Laboratorio - Calculadora PHP</title>
</head>
<body>

    <h2>Calculadora PHP (Problema #2)</h2>

    <form method="post" action="lab2calc.php">
        <label for="num1">Número 1:</label><br>
        <input type="number" step="any" name="num1" id="num1" required><br><br>

        <label for="num2">Número 2 (opcional para redondeo):</label><br>
        <input type="number" step="any" name="num2" id="num2"><br><br>

        <label for="operacion">Operación:</label><br>
        <select name="operacion" id="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="redondear">Redondear decimal (Número 1)</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr>
</body>
</html>