<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando Dados</title>
</head>

<body>
    <?php
    include("conexao.php");
    $comandoSQL = 'SELECT `id`, `nome`, `quantidade` FROM `ingredientes`';
    $comando = $conexao->prepare($comandoSQL);
    $resultado = $comando->execute();
    if ($resultado) {
        echo 'Mostrando Resultado: <br>';
        while ($linha = $comando->fetch()) {
            echo $linha['nome'] . " ";
            echo $linha['quantidade'] . " ";
            $id = $linha['id'];
            echo "<form action='excluir.php' method='post'><input type='hidden' name='id' value='$id'><input type='submit' value='Excluir'></form>
            <form action='alter.php' method='post'><input type='hidden' name='id' value='$id'><input type='submit' value='Alterar'></form>";
            echo "<br>";
        }
    }
    ?>
    <a href='formulario.php' class='btn btn-primary'>Voltar ao Formulario</a><br>
    <a href="http://localhost/index.php" class="btn btn-primary">Voltar ao Menu</a>
</body>

</html>