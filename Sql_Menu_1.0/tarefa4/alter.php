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
$comandoSQL = 'SELECT `id`, `titulo`, `idioma`, `paginas`, `editora`, `dataPublicacao`, `ISBN` FROM `livro` WHERE id = '.$id.'';
$comando = $conexao->prepare($comandoSQL);
$resultado = $comando->execute();
$linha = $comando->fetch();
?>
<body>
    <form action='atualiza.php' method='post'>
        <input type='hidden' name='id' value='<?php echo $id . ""?>'>
        <label for='titulo'>Titulo:</label>
        <input type='text' name='titulo' value='<?php echo $linha['titulo'] . ""?>'><br>

        <label for='idioma'>Idioma:</label>
        <input type='text' name='idioma' value='<?php echo $linha['idioma'] . ""?>'><br>

        <label for='paginas'>Paginas:</label>
        <input type='text' name='paginas' value='<?php echo $linha['paginas'] . ""?>'><br>

        <label for='editora'>Editora:</label>
        <input type='text' name='editora' value='<?php echo $linha['editora'] . ""?>'><br>

        <label for='dataPublicacao'>Data de Publicação:</label>
        <input type='text' name='dataPublicacao' value='<?php echo $linha['dataPublicacao'] . ""?>'><br>

        <label for='ISBN'>ISBN:</label>
        <input type='text' name='ISBN' value='<?php echo $linha['ISBN'] . ""?>'><br>

        <input type='submit' value='Alterar'>
        </form>
</body>
</html>
