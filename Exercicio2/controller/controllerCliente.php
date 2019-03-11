<?php
    $codigo = filter_input(INPUT_GET, "codigo");
    $nome = filter_input(INPUT_GET, "nome");
    $dataNascimento = filter_input(INPUT_GET, "dataNascimento");
    $preferencia = filter_input(INPUT_GET, "preferencia");

    require_once '../model/Cliente.php';
    $cilente1 = new Cliente($codigo, $nome, $dataNascimento, $preferencia);

    $cilente1->imprimir();
    /*
    printf("Codigo: {$codigo}<br/>Nome: {$nome}<br/>");
    echo "Data: ".date('d-m-Y',strtotime($dataNascimento))."<br/>";
    //printf("Data: {$data} <br/>");
    printf("Preferencia: {$preferencia}<br/>");

    */
?>
<hr size="2" color="black"/>
<button type="button" onclick="history.back()">Voltar</button>

<!--
codigo=222

nome=filipe

dataNascimento=2019-03-05

preferencia=preto
-->