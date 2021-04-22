<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnEditar'])) {

    $erro = 0;

    if (isset($_REQUEST['id_cli']) && !empty($_REQUEST['id_cli'])) {
        $id_cli = $_REQUEST['id_cli'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['nome_cli']) && !empty($_REQUEST['nome_cli'])) {
        $nome_cli = $_REQUEST['nome_cli'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['data_nascimento_cli']) && !empty($_REQUEST['data_nascimento_cli'])) {
        $data_nascimento_cli = $_REQUEST['data_nascimento_cli'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['celular_cli']) && !empty($_REQUEST['celular_cli'])) {
        $celular_cli = $_REQUEST['celular_cli'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE clientes SET nome_cli = '$nome_cli', data_nascimento_cli = '$data_nascimento_cli', celular_cli = '$celular_cli' WHERE id_cli = $id_cli";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: clientes.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>