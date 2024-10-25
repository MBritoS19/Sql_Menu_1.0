<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

try {
    $nome = $_POST['nome'];
    $url = $_POST['url'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $id = $_POST['id'];

    $resultado = $conexao->prepare("UPDATE `produtos` SET `nome` = ?, `url` = ?, `descricao` = ?, `preco` = ? WHERE `produtos`.`id` = ?");
    $resultado->execute(array($nome, $url, $descricao, $preco, $id));

    if ($resultado) {
        echo "Comando executado!";
    } else {
        echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
header("location: mostrar.php");
