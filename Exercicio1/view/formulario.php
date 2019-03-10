<form method="post" action="../controller/controller.php">
    <h1>Dados do Carro</h1>
    Motor: <input type="text" name="motor" id="motor" placeholder="Informe o Motor">
    Modelo: <input type="text" name="modelo" id="modelo" placeholder="Informe o Modelo">
    Cor: <input type="text" name="cor" id="cor" placeholder="Informe a Cor">
    Marca: <input type="text" name="marca" id="marca" placeholder="Informe a Marca">
    Ano: <input type="text" name="ano" id="ano" placeholder="Informe o Ano">
    Cambio: <input type="text" name="cambio" id="cambio" placeholder="Informe o Cambio">
    <hr size="2" color="black"/>
    <h1>Dados Motor</h1>
    Cilindro: <input type="text" name="cilindro" id="cilindro" placeholder="Informe o Cilindro">
    Potencia: <input type="text" name="potencia" id="potencia" placeholder="Informe a Potencia">
    Giro Atual: <input type="text" name="giroAtual" id="giroAtual" placeholder="Informe o Giro Atual">
    Combustivel: <input type="text" name="combustivel" id="combustivel" placeholder="Informe o Combustivel">
    <hr size="2" color="black"/>
    <button type="button" onclick="history.back()">Voltar</button>
    <input type="submit" value="Gravar Dados">
</form>