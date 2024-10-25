<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

try {
    $nome = $_POST['nome'];
    $pontos = $_POST['pontos'];
    $id = $_POST['id'];

    $resultado = $conexao->prepare("UPDATE `times` SET `nome` = ?, `pontos` = ? WHERE `times`.`id` = ?");
    $resultado->execute(array($nome, $pontos, $id));

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
