<?php
    $codigo = filter_input(INPUT_POST, "codigo");
    $nome = filter_input(INPUT_POST, "nome");
    $dataNascimento = filter_input(INPUT_POST, "dataNascimento");
    $setor = filter_input(INPUT_POST, "setor");
    $dataAdmissao = filter_input(INPUT_POST, "dataAdmissao");
    $salario = filter_input(INPUT_POST, "salario");

    require_once '../model/Colaborador.php';
    $colaborador1 = new Colaborador($codigo, $nome, $dataNascimento, $setor, $dataAdmissao, $salario);

    $colaborador1->imprimir();
?>
<hr size="2" color="black"/>
<button type="button" onclick="history.back()">Voltar</button>