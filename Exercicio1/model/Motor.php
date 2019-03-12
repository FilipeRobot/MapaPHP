<?php
/**
 * Created by Filipe.
 * User: filip
 * Date: 10/03/2019
 * Time: 16:04
 */
class Motor
{
    public $cilindro, $potencia, $giroAtual, $combustivel;

    /**
     * @return mixed
     */
    public function getCilindro()
    {
        return $this->cilindro;
    }

    /**
     * @param mixed $cilindro
     */
    public function setCilindro($cilindro): void
    {
        $this->cilindro = $cilindro;
    }

    /**
     * @return mixed
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param mixed $potencia
     */
    public function setPotencia($potencia): void
    {
        $this->potencia = $potencia;
    }

    /**
     * @return mixed
     */
    public function getGiroAtual()
    {
        return $this->giroAtual;
    }

    /**
     * @param mixed $giroAtual
     */
    public function setGiroAtual($giroAtual): void
    {
        $this->giroAtual = $giroAtual;
    }

    /**
     * @return mixed
     */
    public function getCombustivel()
    {
        return $this->combustivel;
    }

    /**
     * @param mixed $combustivel
     */
    public function setCombustivel($combustivel): void
    {
        $this->combustivel = $combustivel;
    }
}
?>