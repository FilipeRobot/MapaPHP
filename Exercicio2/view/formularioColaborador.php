<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário Exercício 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style type="text/css">
        fieldset {
            text-align: justify-all;
            box-shadow: 1px 1px 10px black;
            padding: 5px ;
            margin-top: 20px;
        }

        div.form-group{
            margin: 5px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <form method="post" action="../controller/controllerColaborador.php" class="form-inline">
        <fieldset>
            <div class="form-group">
                <label for="codigo">Código: </label>
                <input type="number" name="codigo" id="codigo" placeholder="Código">
            </div>

            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento: </label>
                <input type="date" name="dataNascimento" id="dataNascimento">
            </div>

            <div class="form-group">
                <label for="setor">Setor: </label>
                <input type="text" name="setor" id="setor" placeholder="setor">
            </div>

            <div class="form-group">
                <label for="dataAdmissao">Data de Admissão: </label>
                <input type="date" name="dataAdmissao" id="dataAdmissao">
            </div>

            <div class="form-group">
                <label for="salario">Salário: </label>
                <input type="number" name="salario" id="salario" placeholder="Salário" step="0.01" min="0">
            </div>
        </fieldset>

        <hr size="2" color="black"/>
        <button type="button" onclick="history.back()">Voltar</button>
        <input type="submit" value="Gravar Dados">
    </form>
</div>
</body>