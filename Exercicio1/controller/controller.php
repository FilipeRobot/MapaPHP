<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário Exercício 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="container-fluid">
    <div class="container-fluid" style="font-size: 12pt">
        <br/>
        <?php
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
                // Carro
                $carro = new Carro();
                $carro->setModelo($modelo);
                $carro->setCor($cor);
                $carro->setMarca($marca);
                $carro->setAno($ano);
                $carro->setCambio($cambio);

                $carro->imprimeCarro();

                // Motor
                $carro->motor = new Motor();
                $carro->motor->setCilindro($cilindro);
                $carro->motor->setPotencia($potencia);
                $carro->motor->setGiroAtual($giroAtual);
                $carro->motor->setCombustivel($combustivel);

                $carro->imprimeMotor();
            }else{
                echo "<div class=\"alert alert-danger\"><h2>";
                echo "<strong>Erro!</strong> Campos não informados</h2></div>";
            }
        ?>
        <hr size="2" color="black" style="margin-top: 1px"/>
        <button type="button" onclick="history.back()" class="btn btn-lg btn-secondary">Voltar</button>
    </div>

    <div class="text-center">
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Feito por Filipe Lemos <br/>RA: 1729501-5</p>
            </div>
        </footer>
    </div>
</body>