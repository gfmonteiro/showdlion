<?php

include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM realiza_venda");

$vendas = $result->fetch_all(MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowdLion</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding:8px;
        }
    </style>
</head>

<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShowdLion</title>
</head>
<body>
<h1>Vendas Realizadas</h1>
    <a href="realiza_venda.php">Vender Veiculo</a>
    <a href="index.php">Voltar</a>
    <table>
        <thead>
            <tr>
                <th>ID Venda</th>
                <th>ID Cliente</th>
                <th>ID Veículo Adqurido</th>
                <th>ID Vendedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda) { ?>
                <tr>
                    <td><?php echo $venda["id_venda"]; ?></td>
                    <td><?php echo $venda["id_cli"]; ?></td>
                    <td><?php echo $venda["id_car"]; ?></td>
                    <td><?php echo $venda["id_vendedor"]; ?></td>
                    <td>
                    <?php echo "<a href='cancela_venda.php?id_venda={$venda['id_venda']}'>Cancelar Venda</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>