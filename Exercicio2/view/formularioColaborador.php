<form method="post" action="../controller/controllerColaborador.php">
    <!-- $codigo, $nome, $dataNascimento, $setor, $dataAdmissao, $salario -->
    Código: <input type="number" name="codigo" id="codigo" placeholder="Código">
    Nome: <input type="text" name="nome" id="nome" placeholder="Nome">
    Data de Nascimento: <input type="date" name="dataNascimento" id="dataNascimento">
    Setor: <input type="text" name="setor" id="setor" placeholder="setor">
    Data de Admissão: <input type="date" name="dataAdmissao" id="dataAdmissao">
    Salário: <input type="number" name="salario" id="salario" placeholder="Salário" step="0.01" min="0">

    <hr size="2" color="black"/>
    <button type="button" onclick="history.back()">Voltar</button>
    <input type="submit" value="Gravar Dados">
</form>