<?php

include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM veiculos");

$veiculos = $result->fetch_all(MYSQLI_ASSOC);



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
<h1>Listagem de Veículos</h1>
    <a href="cadastro_veiculos.php">Cadastrar Veículos</a>
    <a href="index.php">Voltar</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Descrição</th>
                <th>Valor R$</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculos as $veiculo) { ?>
                <tr>
                    <td><?php echo $veiculo["id_car"]; ?></td>
                    <td><?php echo $veiculo["nome_car"]; ?></td>
                    <td><?php echo $veiculo["valor_car"]; ?></td>
                    <td>
                        <?php echo "<a href='edita_veiculo.php?id_car={$veiculo['id_car']}'>Editar</a>"; ?>
                        <?php echo "<a href='exclui_veiculo.php?id_car={$veiculo['id_car']}'>Excluir</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>