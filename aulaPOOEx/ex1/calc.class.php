<?php
    class Calcular{
        var $valor;
        var $valorComDesconto;
        function desconto($valor){
            $this->valor = $valor;
            $this->valorComDesconto = $this->valor = $this->valor - ($this->valor * 0.1);
            echo "R$" . number_format($this->valorComDesconto, 2);
        }
    }
?>