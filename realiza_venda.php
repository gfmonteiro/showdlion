<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['id_cli']) && !empty($_REQUEST['id_cli'])) {
        $id_cli = $_REQUEST['id_cli'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['id_car']) && !empty($_REQUEST['id_car'])) {
        $id_car = $_REQUEST['id_car'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['id_vendedor']) && !empty($_REQUEST['id_vendedor'])) {
        $id_vendedor = $_REQUEST['id_vendedor'];
    } else {
        $erro = 1;
    }

    } else {
        $erro = 1;
    }

    if (!$erro) {
        $sql = "INSERT INTO realiza_venda (id_cli, id_car, id_vendedor) VALUES ('$id_cli','$id_car','$id_vendedor')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/projetoloja/vendas.php");
        } else {
            echo "Erro ao executar o SQL";
        }
    }


?>


<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Venda</title>
    <style>
        .form-input {
            margin: 15px;
        }

        .form-input input {
            padding: 5px;
            border-radius: 4px;
            border: 2px solid #8f8f8f;
        }

        .form-input input:focus {
            outline: none !important;
            border: 2px solid #3064ff;
        }

        .form-input label {
            display: block;
            position: relative;

        }

        .form-input input[type=submit] {
            padding: 10px 25px 10px 25px;
            color: black;
            background-color: #62d158;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 25px 10px 25px;
            background-color: #9bc997;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Realizar Venda</h1>
    <form action="realiza_venda.php" method="post">
        <div class="form-input">
            <label for="id_cli">ID Cliente</label>
            <input type="text" id="id_cli" name="id_cli" required>
        </div>

        <div class="form-input">
            <label for="id_car">ID Carro</label>
            <input type="text" id="id_car" name="id_car" required>
        </div>


        <div class="form-input">
            <label for="id_vendedor">ID Vendedor</label>
            <input type="text" id="id_vendedor" name="id_vendedor" required="">
        </div>


        <div class="form-input">
            <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
        </div>
    </form>
</body>
</html>