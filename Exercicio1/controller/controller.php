<?php
if ((filter_input(INPUT_POST, "motor")&&
    filter_input(INPUT_POST, "modelo")&&
    filter_input(INPUT_POST, "cor")&&
    filter_input(INPUT_POST, "marca")&&
    filter_input(INPUT_POST, "ano")&&
    filter_input(INPUT_POST, "cambio"))||(
    filter_input(INPUT_POST, "cilindro")&&
    filter_input(INPUT_POST, "potencia")&&
    filter_input(INPUT_POST, "giroAtual")&&
    filter_input(INPUT_POST, "combustivel"))) {

    //Dados Carro
    $motor = filter_input(INPUT_POST, "motor")?filter_input(INPUT_POST, "motor"):"Não Informado";
    $modelo = filter_input(INPUT_POST, "modelo")?filter_input(INPUT_POST, "modelo"):"Não Informado";
    $cor = filter_input(INPUT_POST, "cor")?filter_input(INPUT_POST, "cor"):"Não Informada";
    $marca = filter_input(INPUT_POST, "marca")?filter_input(INPUT_POST, "marca"):"Não Informada";
    $ano = filter_input(INPUT_POST, "ano")?filter_input(INPUT_POST, "ano"):"Não Informado";
    $cambio = filter_input(INPUT_POST, "cambio")?filter_input(INPUT_POST, "cambio"):"Não Informado";

    //Dados Motor
    $cilindro = filter_input(INPUT_POST, "cilindro")?filter_input(INPUT_POST, "cilindro"):"Não Informado";
    $potencia = filter_input(INPUT_POST, "potencia")?filter_input(INPUT_POST, "potencia"):"Não Informada";
    $giroAtual = filter_input(INPUT_POST, "giroAtual")?filter_input(INPUT_POST, "giroAtual"):"Não Informado";
    $combustivel = filter_input(INPUT_POST, "combustivel")?filter_input(INPUT_POST, "combustivel"):"Não Informado";

    require_once '../model/Carro.php';
    require_once '../model/Motor.php';
    $carro = new Carro();
    //Carro
    $carro->setMotor($motor);
    $carro->setModelo($modelo);
    $carro->setCor($cor);
    $carro->setMarca($marca);
    $carro->setAno($ano);
    $carro->setCambio($cambio);

    //Motor
    $carro->setCilindro($cilindro);
    $carro->setPotencia($potencia);
    $carro->setGiroAtual($giroAtual);
    $carro->setCombustivel($combustivel);

    $carro->imprimeCarro();
    $carro->imprimeMotor();
}else{
    echo "Erro!";
}
?>
<hr size="2" color="black"/>
<button type="button" onclick="history.back()">Voltar</button>