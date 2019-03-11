<?php
/**
 * Created by Filipe.
 * User: filip
 * Date: 10/03/2019
 * Time: 18:03
 */

class Cliente extends Pessoa
{
    public $preferencia;

    public function imprimir()
    {
        // TODO: Implement imprimir() method.
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