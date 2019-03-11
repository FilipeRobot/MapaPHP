<style type="text/css">
    fieldset {
        text-align: justify-all;
        box-shadow: 1px 1px 10px black;
        padding: 5px ;
        width: 25%;
    }
</style>
<?php
/**
 * Created by Filipe.
 * User: filip
 * Date: 10/03/2019
 * Time: 18:03
 */
include 'Pessoa.php';
class Cliente extends Pessoa
{
    public $preferencia;

    public function imprimir()
    {
        // TODO: Implement imprimir() method.
        echo "<fieldset>";
        echo "<h2>Informações do Cliente</h2>";
        printf("Codigo: {$this->getCodigo()}<br/>Nome: {$this->getNome()}<br/>");
        echo "Data de nascimento: ".date('d/m/Y',strtotime($this->getDataNascimento()))."<br/>";
        //printf("Data: {$data} <br/>");
        printf("Preferencia: {$this->getPreferencia()}<br/>");
        echo "</fieldset>";
    }

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