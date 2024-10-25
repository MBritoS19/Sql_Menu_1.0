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
$comandoSQL = 'SELECT `id`, `nome`, `pontos` FROM `times` WHERE id = '.$id.'';
$comando = $conexao->prepare($comandoSQL);
$resultado = $comando->execute();
$linha = $comando->fetch();
?>
<body>
    <form action='atualiza.php' method='post'>
        <input type='hidden' name='id' value='<?php echo $id . ""?>'>
        <label for='nome'>Nome:</label>
        <input type='text' name='nome' value='<?php echo $linha['nome'] . ""?>'><br>
        <label for='pontos'>Pontos:</label>
        <input type='text' name='pontos' value='<?php echo $linha['pontos'] . ""?>'><br>
        <input type='submit' value='Alterar'>
        </form>
</body>
</html>
