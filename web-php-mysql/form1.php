<?php
if (isset($_POST["submit"]));
{
    include_once("config.php");

    $nome_produto = $_POST["nome_produto"];
    $descricao_produto = $_POST["descricao_produto"];
    $custo_producao = $_POST["custo_producao"];
    $preco_venda = $_POST["preco_venda"];
}
$response = mysqli_query($conexao,"INSERT INTO produto (nome_produto,descricao_produto,custo_producao,preco_venda)VALUES('$nome_produto', '$descricao_produto', '$custo_producao', '$preco_venda') ")
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Produto</title>
</head>
<body>

    <h1>Formulário de Cadastro de Produto</h1>

    <form action="form1.php" method="post">

       
      
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" id="nome_produto" name="nome_produto" placeholder="Digite o nome do Produto">
        <br><br><br>

       
        <label for="descricao_produto">Descrição do Produto:</label>
        <input type="text" id="descricao_produto" name="descricao_produto" placeholder="Digite a Descrição do Produto"><br><br><br>

        
        <label for="custo_producao">Custo de Produção:</label>
        <input type="number" id="custo_producao" name="custo_producao" placeholder="digite o Custo de Produção"><br><br><br>

       
        <label for="preco_venda">Preço de Venda:</label>
        <input type="number" id="preco_venda" name="preco_venda" placeholder="digite o preço de venda"><br><br>

        
        <br>
        <input type="submit" name = "submit" id="submit">
        
    </form>
    

</body>
</html>

