<?php

class Calcular
{
    private $valor;

    public function __construct()
    {
        $this->setValor($_POST['valor']);
        echo $this->getValor();
    }


    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor -= $valor * 0.1;

        return $this;
    }
}

if (empty($_POST['valor'])) {
    header("Location: index.php");
}
// faça um programa que receba como dado de entrada o valor de um serviço, em um formulário e mostre como resultado o valor do serviço com um desconto de 10%. Obs. Utilizar classe, com método get e set, um arquivo para formulario e outro para a classe.
?>
<DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>
            <?php
            $obj = new Calcular;
            ?>
        </h1>
        <a href="index.php" class="btn">voltar</a>
    </main>
</body>

</html>