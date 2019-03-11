<form method="post" action="../controller/controller.php">
    <style type="text/css">
        fieldset{
            text-align: left;
            box-shadow: 1px 1px 10px black;
        }
    </style>
    <h1>Dados do Carro</h1>
    <fieldset>
        <label for="motor">Motor: </label><input type="text" name="motor" id="motor" placeholder="Informe o Motor"><br/>
        <label for="modelo">Modelo: </label><input type="text" name="modelo" id="modelo" placeholder="Informe o Modelo"><br/>
        <label for="cor">Cor: </label><input type="text" name="cor" id="cor" placeholder="Informe a Cor"><br/>
        <label for="marca">Marca: </label><input type="text" name="marca" id="marca" placeholder="Informe a Marca"><br/>
        <label for="ano">Ano: </label><input type="text" name="ano" id="ano" placeholder="Informe o Ano"><br/>
        <label for="cambio">Cambio: </label><input type="text" name="cambio" id="cambio" placeholder="Informe o Cambio">
    </fieldset>
    <hr size="2" color="black"/>
    <h1>Dados Motor</h1>
    <fieldset>
        <label for="cilindro">Cilindro: </label><input type="text" name="cilindro" id="cilindro"
                                                       placeholder="Informe o Cilindro"><br/>
        <label for="potencia">Potencia: </label><input type="text" name="potencia" id="potencia"
                                                       placeholder="Informe a Potencia"><br/>
        <label for="giroAtual">Giro Atual: </label><input type="text" name="giroAtual" id="giroAtual"
                                                          placeholder="Informe o Giro Atual"><br/>
        <label for="combustivel">Combustivel: </label><input type="text" name="combustivel" id="combustivel"
                                                             placeholder="Informe o Combustivel">
    </fieldset>
    <hr size="2" color="black"/>
    <button type="button" onclick="history.back()">Voltar</button>
    <input type="submit" value="Gravar Dados">
</form>