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
            if (filter_input(INPUT_POST, "codigo")&&
                filter_input(INPUT_POST, "nome")&&
                filter_input(INPUT_POST, "dataNascimento")&&
                filter_input(INPUT_POST, "setor")&&
                filter_input(INPUT_POST, "dataAdmissao")&&
                filter_input(INPUT_POST, "salario")){

                $codigo = filter_input(INPUT_POST, "codigo");
                $nome = filter_input(INPUT_POST, "nome");
                $dataNascimento = filter_input(INPUT_POST, "dataNascimento");
                $setor = filter_input(INPUT_POST, "setor");
                $dataAdmissao = filter_input(INPUT_POST, "dataAdmissao");
                $salario = filter_input(INPUT_POST, "salario");

                require_once '../model/Colaborador.php';
                $colaborador1 = new Colaborador((int)$codigo, $nome, $dataNascimento, $setor, $dataAdmissao, (float)$salario);

                $colaborador1->imprimir();
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
                <p>Feito por Filipe Lemos</p>
            </div>
        </footer>
    </div>
</body>
