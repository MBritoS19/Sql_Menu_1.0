<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<?php 
include("conexao.php");
$id = $_POST['id'];
$comandoSQL = 'SELECT `id`, `nome`, `url`, `descricao`, `preco` FROM `produtos` WHERE id = '.$id.'';
$comando = $conexao->prepare($comandoSQL);
$resultado = $comando->execute();
$linha = $comando->fetch();
?>
<body>
    <form action='atualiza.php' method='post'>
        <input type='hidden' name='id' value='<?php echo $id . ""?>'>
        <label for='nome'>Nome:</label>
        <input type='text' name='nome' value='<?php echo $linha['nome'] . ""?>'><br>
        <label for='url'>Url da imagem:</label>
        <input type='text' name='url' value='<?php echo $linha['url'] . ""?>'><br>
        <label for='descricao'>Descrição:</label>
        <input type='text' name='descricao' value='<?php echo $linha['descricao'] . ""?>'><br>
        <label for='preco'>Preço:</label>
        <input type='text' name='preco' value='<?php echo $linha['preco'] . ""?>'><br>
        <input type='submit' value='Alterar'>
        </form>
</body>
</html>
