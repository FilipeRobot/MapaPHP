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
class Colaborador extends Pessoa {
    // Atributos
    public $setor;
    private $dataAdmissao;
    protected $salario;

    // Métodos
    public function imprimir() {
        echo "<fieldset>";
        echo "<h2>Informações do Colaborador</h2>";
        printf("Código: {$this->getCodigo()}<br/>Nome: {$this->getNome()}<br/>");
        echo "Data de Nascimento: ".date('d/m/Y',strtotime($this->getDataNascimento()))."<br/>";
        printf("Setor: {$this->getSetor()}<br/>");
        echo "Data de Admissão: ".date("d/m/Y",strtotime($this->getDataAdmissao()))."<br/>";
        echo "Salário: R$ ".number_format($this->getSalario(),2, ',', '.');
        echo "</fieldset>";
        echo "<br/>";
    }

    // Métodos Especiais
    public function __construct($codigo, $nome, $dataNascimento, $setor, $dataAdmissao, $salario)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
        $this->setSetor($setor);
        $this->setDataAdmissao($dataAdmissao);
        $this->setSalario($salario);
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor): void
    {
        $this->setor = $setor;
    }

    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao($dataAdmissao): void
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }
}