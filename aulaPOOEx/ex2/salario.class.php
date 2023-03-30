<?php
class Salario{
    var $salarioDescontado;

    public function calcular_salario($valorAtual) {
        if((float) $valorAtual <= 1500) {
            $this->setSalarioDescontado((float) $valorAtual = (float) $valorAtual - ((float) $valorAtual * 0.05));
        } else {
            $this->setSalarioDescontado((float) $valorAtual = (float) $valorAtual - ((float) $valorAtual * 0.11));
        }
        echo "R$" . number_format($this->getSalarioDescontado(), 2);
    }
    
    private function getSalarioDescontado()
    {
        return $this->salarioDescontado;
    }

    private function setSalarioDescontado($salarioDescontado): self
    {
        $this->salarioDescontado = $salarioDescontado;

        return $this;
    }
}
?>