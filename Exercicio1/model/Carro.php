<style type="text/css">
    fieldset {
        box-shadow: 1px 1px 10px black;
        padding: 5px ;
        width: max-content;
    }
</style>
<?php
require_once 'Motor.php';
class Carro {
    // Atributos
    public $motor, $modelo, $cor, $marca, $ano, $cambio;

    // Métodos
    public function imprimeCarro(){
        echo "<fieldset class='carro'>";
        echo "<h2>Informações do Carro</h2>";
        printf("Modelo: {$this->getModelo()} <br/>
                       Cor: {$this->getCor()} <br/>
                       Marca: {$this->getMarca()} <br/>
                       Ano: {$this->getAno()} <br/>
                       Cambio: {$this->getCambio()} <br/>");
        echo "</fieldset>";
        echo "<br/>";
    }

    public function imprimeMotor(){
        echo "<fieldset class='motor'>";
        echo "<h2>Informações do Motor</h2><br/>";
        printf("Cilindro: {$this->motor->getCilindro()} <br/>
                       Potencia: {$this->motor->getPotencia()} <br/>
                       Giro Atual: {$this->motor->getGiroAtual()} <br/>
                       Combustível: {$this->motor->getCombustivel()}");
        echo "</fieldset>";
        echo "<br/>";
    }

    // Métodos Especiais
    public function getMotor()
    {
        return $this->motor;
    }

    public function setMotor($motor): void
    {
        $this->motor = $motor;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor): void
    {
        $this->cor = $cor;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    public function getCambio()
    {
        return $this->cambio;
    }

    public function setCambio($cambio): void
    {
        $this->cambio = $cambio;
    }
}
?>