<?php
    require_once '../model/Carro.php';
    require_once '../model/Motor.php';
    //Dados Carro
    $motor = filter_input(INPUT_POST, "motor");
    $modelo = filter_input(INPUT_POST, "modelo");
    $cor = filter_input(INPUT_POST, "cor");
    $marca = filter_input(INPUT_POST, "marca");
    $ano = filter_input(INPUT_POST, "ano");
    $cambio = filter_input(INPUT_POST, "cambio");

    //Dados Motor
    $cilindro = filter_input(INPUT_POST, "cilindro");
    $potencia = filter_input(INPUT_POST, "potencia");
    $giroAtual = filter_input(INPUT_POST, "giroAtual");
    $combustivel = filter_input(INPUT_POST, "combustivel");

    $carro = new Carro();
    //Carro
    $carro->setMotor($motor);
    $carro->setModelo($modelo);
    $carro->setCor($cor);
    $carro->setMarca($marca);
    $carro->setAno($ano);
    $carro->setCambio($cambio);

    //Motor
    //$motor = new Motor();
    $carro->setCilindro($cilindro);
    $carro->setPotencia($potencia);
    $carro->setGiroAtual($giroAtual);
    $carro->setCombustivel($combustivel);


    $carro->imprimeCarro();
    echo "<br/>";
    $carro->imprimeMotor();
?>
<hr size="2" color="black"/>
<button type="button" onclick="history.back()">Voltar</button>
