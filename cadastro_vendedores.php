<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

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

    } else {
        $erro = 1;
    }

    if (!$erro) {
        $sql = "INSERT INTO vendedores (nome_vendedor, email_vendedor, data_nascimento_vendedor) VALUES ('$nome_vendedor','$email_vendedor','$data_nascimento_vendedor')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/projetoloja/vendedores.php");
        } else {
            echo "Erro ao executar o SQL";
        }
    } ##else {
        ##echo "Erro nos dados. Falta algum valor";
    ##}


?>


<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vendedores</title>
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
    <h1>Cadastro de Vendedores</h1>
    <form action="cadastro_vendedores.php" method="post">
        <div class="form-input">
            <label for="nome_vendedor">Nome</label>
            <input type="text" id="nome_vendedor" name="nome_vendedor" required>
        </div>

        <div class="form-input">
            <label for="email_vendedor">E-mail</label>
            <input type="email_vendedor" id="email_vendedor" name="email_vendedor" required>
        </div>


        <div class="form-input">
            <label for="data_nascimento_vendedor">Data de Nascimento</label>
            <input type="date" id="data_nascimento_vendedor" name="data_nascimento_vendedor" required="">
        </div>


        <div class="form-input">
            <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
        </div>
    </form>
</body>
</html>