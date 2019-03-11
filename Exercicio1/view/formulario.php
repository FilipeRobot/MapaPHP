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
        }
        div.form-group{
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <form method="post" action="../controller/controller.php" class="form-inline">
            <h2>Dados do Carro</h2>
            <fieldset>

                <div class="form-group">
                    <label for="motor">Motor: </label>
                    <input type="text" name="motor" id="motor" placeholder="Informe o Motor">
                </div>

                <div class="form-group">
                    <label for="modelo">Modelo: </label>
                    <input type="text" name="modelo" id="modelo" placeholder="Informe o Modelo">
                </div>
                <div class="form-group">
                    <label for="cor">Cor: </label>
                    <input type="text" name="cor" id="cor" placeholder="Informe a Cor">
                </div>

                <div class="form-group">
                    <label for="marca">Marca: </label>
                    <input type="text" name="marca" id="marca" placeholder="Informe a Marca">
                </div>

                <div class="form-group">
                    <label for="ano">Ano: </label>
                    <input type="text" name="ano" id="ano" placeholder="Informe o Ano">
                </div>

                <div class="form-group">
                    <label for="cambio">Cambio: </label>
                    <input type="text" name="cambio" id="cambio" placeholder="Informe o Cambio">
                </div>
            </fieldset>
            <h2>Dados Motor</h2>
            <fieldset>
                <div class="form-group">
                    <label for="cilindro">Cilindro: </label>
                    <input type="text" name="cilindro" id="cilindro" placeholder="Informe o Cilindro">
                </div>
                <div class="form-group">
                    <label for="potencia">Potencia: </label>
                    <input type="text" name="potencia" id="potencia" placeholder="Informe a Potencia">
                </div>
                <div class="form-group">
                    <label for="giroAtual">Giro Atual: </label>
                    <input type="text" name="giroAtual" id="giroAtual" placeholder="Informe o Giro Atual">
                </div>
                <div class="form-group">
                    <label for="combustivel">Combustivel: </label>
                    <input type="text" name="combustivel" id="combustivel" placeholder="Informe o Combustivel">
                </div>
            </fieldset>
            <hr size="2" color="black"/>
            <button type="button" onclick="history.back()">Voltar</button>
            <input type="submit" value="Gravar Dados">
        </form>
    </div>
</body>