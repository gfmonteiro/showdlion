<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id_car'])) {
    
    $id_car = $_REQUEST['id_car'];

    $sql = "DELETE FROM veiculos WHERE id_car = $id_car";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Veiculo {$id_car} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir Veiculo {$id_car}');</script>";
    }

}

echo "<script>window.location.replace('veiculos.php');</script>";

?>