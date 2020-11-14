<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em Php</title>
</head>
<body>
    <form action="calcular.php" method="post">
        <label for="">
            Primeiro número
            <input type="text" name="numero1">
        </label>
        <label for="">
            Segundo número
            <input type="text" name="numero2">
        </label>
        <br>
        Operação: <br>
        <label for="">
            Somar
            <input type="radio" name="operacao" value="somar">
        </label>
        <label for="">
            Subtrair
            <input type="radio" name="operacao" value="subtrair">
        </label>
        <label for="">
            Multiplicar
            <input type="radio" name="operacao" value="multiplicar">
        </label>
        <label for="">
            Dividir
            <input type="radio" name="operacao" value="dividir">
        </label>
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
