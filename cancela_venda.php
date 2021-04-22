<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id_venda'])) {
    
    $id_venda = $_REQUEST['id_venda'];

    $sql = "DELETE FROM realiza_venda WHERE id_venda = $id_venda";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Venda {$id_venda} cancelada com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao cancelar Venda {$id_venda}');</script>";
    }

}

echo "<script>window.location.replace('vendas.php');</script>";

?>