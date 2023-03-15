<?php

class Calculadora
{
    public function soma($dados) {
        return "A soma é: " . ($dados[0] + $dados[1]);
    }

    public function subtracao($dados) {
        return "A subtração é: " . ($dados[0] - $dados[1]);
    }
    
    public function multiplicacao($dados) {
        return "A multiplicação é: " . ($dados[0] * $dados[1]);
    }
    
    public function divisao($dados) {
        return "A divisão é: " . ($dados[0] / $dados[1]);
    }
}

$calcular = array_values($_POST);
$calculadora = new Calculadora();
echo "<h1>";
if ($calcular[2] == "somar") {
    echo $calculadora->soma($calcular);
} elseif ($calcular[2] == "subtrair") {
    echo $calculadora->subtracao($calcular);
} elseif ($calcular[2] == "multiplicar") {
    echo $calculadora->multiplicacao($calcular);
} else{
    echo $calculadora->divisao($calcular);
}
echo "</h1>";
?>