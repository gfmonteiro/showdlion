<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnEditar'])) {

    $erro = 0;

    if (isset($_REQUEST['id_car']) && !empty($_REQUEST['id_car'])) {
        $id_car = $_REQUEST['id_car'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['nome_car']) && !empty($_REQUEST['nome_car'])) {
        $nome_car = $_REQUEST['nome_car'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['valor_car']) && !empty($_REQUEST['valor_car'])) {
        $valor_car = $_REQUEST['valor_car'];
    } else {
        $erro = 1;
    }


    if (!$erro) {
        
        $sql = "UPDATE veiculos SET nome_car = '$nome_car', valor_car = '$valor_car' WHERE id_car = $id_car";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: veiculos.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>