<?php
include("conexao.php");

try {
    $id = $_POST['id'];
    $resultado = $conexao->prepare("DELETE FROM ingredientes WHERE `ingredientes`.`id` = ?");
    $resultado->execute(array($id));

    if ($resultado) {
        echo "Item apagado!";
    } else {
        echo "Erro ao apagar o item!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}
header("location: mostrar.php");
