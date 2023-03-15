<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
    <center>
        <h1>
<!--Código PHP-->
<div class="jumbotron">
  <h1 class="display-4">Sistema de Vendas</h1>
  <p class="lead"><h3>Insira o valor da venda e a quantidade de parcelas:</h3></p>
  <hr class="my-4">
  <p>Este sistema Calcula desconto o juros dependendo da quantidade de parcelas.</p>
  

<?php
//Funcao da calculadora:
function calcular($n1, $n2){
    if ($n2 <= 1){
        $nd = $n1 * 0.1;
        $nt = $n1 - $nd;
        echo ("Valor a pagar: R$$nt");
    }
    elseif ($n2 > 1 && $n2 < 4 ){
        $nd = $n1 * 0.05;
        $nt = $n1 + $nd;
        echo ("Valor a pagar: R$$nt");
    }
    elseif ($n2 >= 4){
        $nd = $n1 * 0.1;
        $nt = $n1 + $nd;
        echo ("Valor a pagar: R$$nt");
    }
    else{
        echo "Tente novamente";
    }
}
//Chamando a funcao
calcular($n1 = $_POST ["n1"], $n2 = $_POST ["n2"])
?>
        <br>
        <a href="form.php"> voltar </a> 
        </h1>
    </center>
    </div>
    </body>
</html>