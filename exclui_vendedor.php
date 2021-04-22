<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id_vendedor'])) {
    
    $id_vendedor = $_REQUEST['id_vendedor'];

    $sql = "DELETE FROM vendedores WHERE id_vendedor = $id_vendedor";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Vendedor {$id_vendedor} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir vendedor {$id_vendedor}');</script>";
    }

}

echo "<script>window.location.replace('vendedores.php');</script>";

?>