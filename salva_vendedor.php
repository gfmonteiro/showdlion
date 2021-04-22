<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnEditar'])) {

    $erro = 0;

    if (isset($_REQUEST['id_vendedor']) && !empty($_REQUEST['id_vendedor'])) {
        $id_vendedor = $_REQUEST['id_vendedor'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['nome_vendedor']) && !empty($_REQUEST['nome_vendedor'])) {
        $nome_vendedor = $_REQUEST['nome_vendedor'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['email_vendedor']) && !empty($_REQUEST['email_vendedor'])) {
        $email_vendedor = $_REQUEST['email_vendedor'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['data_nascimento_vendedor']) && !empty($_REQUEST['data_nascimento_vendedor'])) {
        $data_nascimento_vendedor = $_REQUEST['data_nascimento_vendedor'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE vendedores SET nome_vendedor = '$nome_vendedor', email_vendedor = '$email_vendedor', data_nascimento_vendedor = '$data_nascimento_vendedor' WHERE id_vendedor = $id_vendedor";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: vendedores.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }
    }

}
        
    // else {
        //echo "Erro nos dados. Falta algum valor";
    //}



?>