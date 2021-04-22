<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id_cli'])) {
    
    $id_cli = $_REQUEST['id_cli'];

    $sql = "DELETE FROM clientes WHERE id_cli = $id_cli";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Cliente {$id_cli} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir Cliente {$id_cli}');</script>";
    }

}

echo "<script>window.location.replace('clientes.php');</script>";

?>