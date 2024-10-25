<?php

// conexao
include("conexao.php");

echo "Conectado!<br>";

try {
    $titulo = $_POST['titulo'];
    $idioma = $_POST['idioma'];
    $paginas = $_POST['paginas'];
    $editora = $_POST['editora'];
    $dataPublicacao = $_POST['dataPublicacao'];
    $ISBN = $_POST['ISBN'];
    $id = $_POST['id'];

    $resultado = $conexao->prepare("UPDATE `livro` SET `titulo` = ?, `idioma` = ?, `paginas` = ?, `editora` = ?, `dataPublicacao` = ?, `ISBN` = ? WHERE `livro`.`id` = ?");
    $resultado->execute(array($titulo, $idioma, $paginas, $editora, $dataPublicacao, $ISBN, $id));

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

