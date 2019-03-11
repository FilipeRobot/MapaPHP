<form method="get" action="../controller/controllerCliente.php">
<!-- $codigo, $nome, $dataNascimento, $preferencia -->
    Codigo: <input type="number" name="codigo" id="codigo" placeholder="Código">
    Nome: <input type="text" name="nome" id="nome" placeholder="Nome">
    Data de Nascimento: <input type="date" name="dataNascimento" id="dataNascimento">
    Preferencia: <input type="text" name="preferencia" id="preferencia" placeholder="Preferencia">

<!--------------------------------------------------------------------------------------------------------------------->
    <hr size="2" color="black"/>
    <button type="button" onclick="history.back()">Voltar</button>
    <input type="submit" value="Gravar Dados">
</form>