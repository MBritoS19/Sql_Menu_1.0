<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

try {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $id = $_POST['id'];

    $resultado = $conexao->prepare("UPDATE `ingredientes` SET `nome` = ?, `quantidade` = ? WHERE `ingredientes`.`id` = ?");
    $resultado->execute(array($nome, $quantidade, $id));

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
header("location: mostrar.php");
