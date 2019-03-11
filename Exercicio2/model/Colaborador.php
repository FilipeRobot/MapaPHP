<?php
/**
 * Created by Filipe.
 * User: filip
 * Date: 10/03/2019
 * Time: 18:04
 */
include 'Pessoa.php';
class Colaborador extends Pessoa
{
    public $setor;
    private $dataAdmissao;
    protected $salario;

    public function imprimir()
    {
        // TODO: Implement imprimir() method.
        echo "<fieldset>";
        echo "<h2>Informações do Colaborador</h2>";
        printf("Codigo: {$this->getCodigo()}<br/>Nome: {$this->getNome()}<br/>");
        echo "Data de Nascimento: ".date('d/m/Y',strtotime($this->getDataNascimento()))."<br/>";
        printf("Setor: {$this->getSetor()}<br/>");
        echo "Data de Admissão: ".date("d/m/Y",strtotime($this->getDataAdmissao()))."<br/>";
        printf("Salario: R$ {$this->getSalario()}");
        echo "</fieldset>";
    }

    public function __construct($codigo, $nome, $dataNascimento, $setor, $dataAdmissao, $salario)
    {
        $this->setCodigo($codigo);
        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
        $this->setSetor($setor);
        $this->setDataAdmissao($dataAdmissao);
        $this->setSalario($salario);
    }

    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor): void
    {
        $this->setor = $setor;
    }

    /**
     * @return mixed
     */
    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    /**
     * @param mixed $dataAdmissao
     */
    public function setDataAdmissao($dataAdmissao): void
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }
}