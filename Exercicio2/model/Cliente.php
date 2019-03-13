<style type="text/css">
    fieldset {
        text-align: justify-all;
        box-shadow: 1px 1px 10px black;
        padding: 5px ;
        width: max-content;
    }
</style>
<?php
require_once 'Pessoa.php';
class Cliente extends Pessoa {
    // Atributos
    public $preferencia;

    // Métodos
    public function imprimir() {
        echo "<fieldset>";
        echo "<h2>Informações do Cliente</h2>";
        printf("Codigo: {$this->getCodigo()}<br/>Nome: {$this->getNome()}<br/>");
        echo "Data de nascimento: ".date('d/m/Y',strtotime($this->getDataNascimento()))."<br/>";
        //printf("Data: {$data} <br/>");
        printf("Preferencia: {$this->getPreferencia()}<br/>");
        echo "</fieldset>";
        echo "<br/>";
    }

    // Métodos Especiais
    public function __construct($codigo, $nome, $dataNascimento, $preferencia)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
        $this->setPreferencia($preferencia);
    }

    public function getPreferencia()
    {
        return $this->preferencia;
    }

    public function setPreferencia($preferencia): void
    {
        $this->preferencia = $preferencia;
    }
}