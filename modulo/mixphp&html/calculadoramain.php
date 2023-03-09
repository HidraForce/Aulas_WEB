<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body{

        }

    </style>
</head>
<body>
    <form action="calculadora.php" method="post" id="cal">
        <label for="num1">Insira um numero</label><br>
        <input type="number" step="any" id="num1" name="num1"><br>
        <label for="num2">Insira um numero</label><br>
        <input type="number" step="any" id="num2" name="num2"><br>
        <label for="Soma">Soma</label><br>
        <input type="radio" id="soma" name="operacao" value="soma"><br>
        <label for="sub">Subtração</label><br>
        <input type="radio" id="sub" name="operacao" value="sub"><br>
        <label for="divs">Divisão</label><br>
        <input type="radio" id="divs" name="operacao" value="divs"><br>
        <label for="multi">Multiplicação</label><br>
        <input type="radio" id="multi" name="operacao" value="mult"><br>
        <button type="submit">CALCULAR AGORA!!!</button>
    </form>
</body>
</html>