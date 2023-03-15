<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <h1>Calculadora</h1>
        <form action="processaCalculadora.php" method="post">
            <div class="inputGroup">
                <label for="n1">Número 1: </label>
                <input type="number" name="n1" id="n1" required>
            </div>

            <div class="inputGroup">
                <label for="n2">Número 2: </label>
                <input type="number" name="n2" id="n2" required>
            </div>

            <div class="inputGroup">
                <input type="submit" value="somar" name="somar">
                <input type="submit" value="subtrair" name="subtrair">
                <input type="submit" value="multiplicar" name="multiplicar">
                <input type="submit" value="dividir" name="dividir">
            </div>
        </form>
        </div>
</body>
</html>