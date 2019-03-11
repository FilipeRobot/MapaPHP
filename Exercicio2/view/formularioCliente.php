<form method="get" action="../controller/controllerCliente.php">
    <label for="codigo">Codigo: </label><input type="number" name="codigo" id="codigo" placeholder="Código">
    <label for="nome">Nome: </label><input type="text" name="nome" id="nome" placeholder="Nome">
    <label for="dataNascimento">Data de Nascimento: </label><input type="date" name="dataNascimento" id="dataNascimento">
    <label for="preferencia">Preferencia: </label><input type="text" name="preferencia" id="preferencia" placeholder="Preferencia">

<!--------------------------------------------------------------------------------------------------------------------->
    <hr size="2" color="black"/>
    <button type="button" onclick="history.back()">Voltar</button>
    <input type="submit" value="Gravar Dados">
</form>