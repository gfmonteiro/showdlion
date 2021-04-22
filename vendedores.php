<?php

include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM vendedores");

$vendedores = $result->fetch_all(MYSQLI_ASSOC);



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
<h1>Listagem de Vendedores</h1>
    <a href="cadastro_vendedores.php">Cadastrar Vendedores</a>
    <a href="index.php">Voltar</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedores as $vendedor) { ?>
                <tr>
                    <td><?php echo $vendedor["id_vendedor"]; ?></td>
                    <td><?php echo $vendedor["nome_vendedor"]; ?></td>
                    <td><?php echo $vendedor["email_vendedor"]; ?></td>
                    <td><?php echo $vendedor["data_nascimento_vendedor"]; ?></td>
                    <td>
                        <?php echo "<a href='edita_vendedor.php?id_vendedor={$vendedor['id_vendedor']}'>Editar</a>"; ?>
                        <?php echo "<a href='exclui_vendedor.php?id_vendedor={$vendedor['id_vendedor']}'>Excluir</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>