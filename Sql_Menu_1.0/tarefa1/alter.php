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
$comandoSQL = 'SELECT `id`, `nome`, `quantidade` FROM `ingredientes` WHERE id = '.$id.'';
$comando = $conexao->prepare($comandoSQL);
$resultado = $comando->execute();
$linha = $comando->fetch();
?>
<body>
    <form action='atualiza.php' method='post'>
        <input type='hidden' name='id' value='<?php echo $id . ""?>'>
        <label for='nome'>Nome:</label>
        <input type='text' name='nome' value='<?php echo $linha['nome'] . ""?>'><br>
        <label for='quantidade'>Quantidade:</label>
        <input type='text' name='quantidade' value='<?php echo $linha['quantidade'] . ""?>'><br>
        <input type='submit' value='Alterar'>
        </form>
</body>
</html>
