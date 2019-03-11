<?php
/**
 * Created by Filipe.
 * User: filip
 * Date: 10/03/2019
 * Time: 16:04
 */
include 'Motor.php';
class Carro extends Motor
{
    public $motor, $modelo, $cor, $marca, $ano, $cambio;

    public function imprimeCarro(){
        printf("Motor: {$this->getMotor()} <br/>
                       Modelo: {$this->getModelo()} <br/>
                       Cor: {$this->getCor()} <br/>
                       Marca: {$this->getMarca()} <br/>
                       Ano: {$this->getAno()} <br/>
                       Cambio: {$this->getCambio()} <br/>");
    }

    public function imprimeMotor(){
        printf("Cilindro: {$this->getCilindro()} <br/>
                       Potencia: {$this->getPotencia()} <br/>
                       Giro Atual: {$this->getGiroAtual()} <br/>
                       Combustível: {$this->getCombustivel()}");
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor): void
    {
        $this->motor = $motor;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor): void
    {
        $this->cor = $cor;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    /**
     * @return mixed
     */
    public function getCambio()
    {
        return $this->cambio;
    }

    /**
     * @param mixed $cambio
     */
    public function setCambio($cambio): void
    {
        $this->cambio = $cambio;
    }

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
