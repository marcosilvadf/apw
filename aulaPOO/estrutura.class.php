<?php
class Mensagem{
    var $variavel;
    public function imprimir($frase){
        $this->variavel	= $frase;
        echo "A  variavel é: $this->variavel";
    }
}
?>