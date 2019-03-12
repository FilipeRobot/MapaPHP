<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário Exercício 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <br/>
    <?php
    //filter_input(INPUT_POST, "motor")&& <-- Colocar isso na primeira linha do "if" se precisar
    if ((filter_input(INPUT_POST, "modelo")&&
        filter_input(INPUT_POST, "cor")&&
        filter_input(INPUT_POST, "marca")&&
        filter_input(INPUT_POST, "ano")&&
        filter_input(INPUT_POST, "cambio"))||(
        filter_input(INPUT_POST, "cilindro")&&
        filter_input(INPUT_POST, "potencia")&&
        filter_input(INPUT_POST, "giroAtual")&&
        filter_input(INPUT_POST, "combustivel"))) {
    //Dados Carro
    //$motor = filter_input(INPUT_POST, "motor")?filter_input(INPUT_POST, "motor"):"Não Informado";
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
    //$motorCarro = new Carro();
    //Carro
    //$carro->setMotor($motor);
    $carro->setModelo($modelo);
    $carro->setCor($cor);
    $carro->setMarca($marca);
    $carro->setAno($ano);
    $carro->setCambio($cambio);

    $carro->imprimeCarro();

    $carro->motor = new Motor();
    $carro->motor->setCilindro($cilindro);
    $carro->motor->setPotencia($potencia);
    $carro->motor->setGiroAtual($giroAtual);
    $carro->motor->setCombustivel($combustivel);

    $carro->imprimeMotor();
/*
    echo "<br/>";
    echo "<pre>";
    var_dump($carro);
    echo "</pre>";
*/

/*
    //Motor
    $motorCarro->objMotor = new Motor();
    $motorCarro->objMotor->setCilindro($cilindro);
    $motorCarro->objMotor->setPotencia($potencia);
    $motorCarro->objMotor->setGiroAtual($giroAtual);
    $motorCarro->objMotor->setCombustivel($combustivel);

    $motorCarro->imprimeMotor();
*/
    }else{
        echo "<div class=\"alert alert-danger\"><h2>
  <strong>Erro!</strong> Campos não informados</h2></div>";
    }
    ?>
    <hr size="2" color="black"/>
    <button type="button" onclick="history.back()">Voltar</button>
</div>
</body>