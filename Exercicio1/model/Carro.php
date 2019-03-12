<style type="text/css">
    fieldset {
        text-align: justify-all;
        box-shadow: 1px 1px 10px black;
        padding: 5px ;
        width: 40%;
    }
    fieldset.carro{
        margin-bottom: 15px;
    }
</style>
<?php
/**
 * Created by Filipe.
 * User: filip
 * Date: 10/03/2019
 * Time: 16:04
 */

class Carro
{
    public $motor, $modelo, $cor, $marca, $ano, $cambio;
    public $objMotor;

    public function imprimeCarro(){
        echo "<fieldset class='carro'>";
        echo "<h2>Informações do Carro</h2>";
        printf("Motor: {$this->getMotor()} <br/>
                       Modelo: {$this->getModelo()} <br/>
                       Cor: {$this->getCor()} <br/>
                       Marca: {$this->getMarca()} <br/>
                       Ano: {$this->getAno()} <br/>
                       Cambio: {$this->getCambio()} <br/>");
        echo "</fieldset>";
    }

    public function imprimeMotor(){
        echo "<fieldset class='motor'>";
        echo "<h2>Informações do Motor</h2><br/>";
        printf("Cilindro: {$this->objMotor->getCilindro()} <br/>
                       Potencia: {$this->objMotor->getPotencia()} <br/>
                       Giro Atual: {$this->objMotor->getGiroAtual()} <br/>
                       Combustível: {$this->objMotor->getCombustivel()}");
        echo "</fieldset>";
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
}
?>