<?php
class Motor {
    public $cilindro, $potencia, $giroAtual, $combustivel;

    public function getCilindro()
    {
        return $this->cilindro;
    }

    public function setCilindro($cilindro): void
    {
        $this->cilindro = $cilindro;
    }

    public function getPotencia()
    {
        return $this->potencia;
    }

    public function setPotencia($potencia): void
    {
        $this->potencia = $potencia;
    }

    public function getGiroAtual()
    {
        return $this->giroAtual;
    }

    public function setGiroAtual($giroAtual): void
    {
        $this->giroAtual = $giroAtual;
    }

    public function getCombustivel()
    {
        return $this->combustivel;
    }

    public function setCombustivel($combustivel): void
    {
        $this->combustivel = $combustivel;
    }
}
?>