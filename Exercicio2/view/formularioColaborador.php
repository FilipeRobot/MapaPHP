<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário Colaborador</title>
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
            <h2>Dados do Colaborador</h2>
            <fieldset>
                <div class="form-group">
                    <label for="codigo">Código: </label>
                    <input type="number" min="0" name="codigo" id="codigo" placeholder="Código" class="form-control form-rounded">
                </div>

                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control form-rounded">
                </div>

                <div class="form-group">
                    <label for="dataNascimento">Data de Nascimento: </label>
                    <input type="date" name="dataNascimento" id="dataNascimento" class="form-control form-rounded">
                </div>

                <div class="form-group">
                    <label for="setor">Setor: </label>
                    <input type="text" name="setor" id="setor" placeholder="setor" class="form-control form-rounded">
                </div>

                <div class="form-group">
                    <label for="dataAdmissao">Data de Admissão: </label>
                    <input type="date" name="dataAdmissao" id="dataAdmissao" class="form-control form-rounded">
                </div>

                <div class="form-group">
                    <label for="salario">Salário: R$</label>
                    <input type="number" name="salario" id="salario" placeholder="Salário: R$ 0000,00" step="0.01" min="0" class="form-control form-rounded" title="Informe apenas números, use ponto ou virgula para os centavos">
                </div>
            </fieldset>

            <hr size="2" color="black"/>
            <button type="button" onclick="history.back()" class="btn btn-lg btn-secondary">Voltar</button>
            <input type="submit" value="Gravar Dados" class="btn btn-lg btn-primary">
        </form>
    </div>
    </div>

    <div class="text-center">
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Feito por Filipe Lemos <br/>RA: 1729501-5</p>
            </div>
        </footer>
    </div>
</body>