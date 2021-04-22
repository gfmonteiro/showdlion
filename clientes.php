<?php

include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM clientes");

$cliente = $result->fetch_all(MYSQLI_ASSOC);



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
<h1>Listagem de Clientes</h1>
    <a href="cadastro_clientes.php">Cadastrar Clientes</a>
    <a href="index.php">Voltar</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cliente as $clientes) { ?>
                <tr>
                    <td><?php echo $clientes["id_cli"]; ?></td>
                    <td><?php echo $clientes["nome_cli"]; ?></td>
                    <td><?php echo $clientes["data_nascimento_cli"]; ?></td>
                    <td><?php echo $clientes["celular_cli"]; ?></td>
                    <td>
                        <?php echo "<a href='edita_cliente.php?id_cli={$clientes['id_cli']}'>Editar</a>"; ?>
                        <?php echo "<a href='exclui_cliente.php?id_cli={$clientes['id_cli']}'>Excluir</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>