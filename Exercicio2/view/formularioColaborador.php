<form method="post" action="../controller/controllerColaborador.php">
    <label for="codigo">Código: </label><input type="number" name="codigo" id="codigo" placeholder="Código">
    <label for="nome">Nome: </label><input type="text" name="nome" id="nome" placeholder="Nome">
    <label for="dataNascimento">Data de Nascimento: </label><input type="date" name="dataNascimento" id="dataNascimento">
    <label for="setor">Setor: </label><input type="text" name="setor" id="setor" placeholder="setor">
    <label for="dataAdmissao">Data de Admissão: </label><input type="date" name="dataAdmissao" id="dataAdmissao">
    <label for="salario">Salário: </label><input type="number" name="salario" id="salario" placeholder="Salário" step="0.01" min="0">

    <hr size="2" color="black"/>
    <button type="button" onclick="history.back()">Voltar</button>
    <input type="submit" value="Gravar Dados">
</form>