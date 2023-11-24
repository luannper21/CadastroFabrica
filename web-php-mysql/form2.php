<?php
if (isset($_POST["submit"]));
{
    include_once("config.php");
    
    $nome_da_maquina = $_POST["nome_da_maquina"];
    $data_de_aquisicao = $_POST["data_de_aquisicao"];
}
$response = mysqli_query($conexao,"INSERT INTO maquina (nome_da_maquina,data_de_aquisicao) VALUES ('$nome_da_maquina','$data_de_aquisicao')")
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Maquina</title>
</head>
<body>

    <h1>Formulário de Cadastro de maquina</h1>
       <form action="form2.php" method="post">
      
        <label for="nome da maquina">Nome da maquina:</label>
        <input type="text" id="nome_da_maquina" name="nome_da_maquina" placeholder="Digite o nome da maquina">
        <br><br><br>

       
        <label for="data_de_aquisicao">Digite a data de aquisicao:</label>
        <input type="text" id="data_de_aquisicao" name="data_de_aquisicao" placeholder="Digite a data de aquisição"><br><br><br>

        
       
        
        <br>
        <input type="submit" name = "submit" id="submit">
        
        </form>

</body>
</html>