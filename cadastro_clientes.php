<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['nome_cli']) && !empty($_REQUEST['nome_cli'])) {
        $nome_cli = $_REQUEST['nome_cli'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['data_nascimento_cli']) && !empty($_REQUEST['data_nascimento_cli'])) {
        $data_nascimento_cli = $_REQUEST['data_nascimento_cli'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['celular_cli']) && !empty($_REQUEST['celular_cli'])) {
        $celular_cli = $_REQUEST['celular_cli'];
    } else {
        $erro = 1;
    }

    } else {
        $erro = 1;
    }

    if (!$erro) {
        $sql = "INSERT INTO clientes (nome_cli, data_nascimento_cli, celular_cli) VALUES ('$nome_cli','$data_nascimento_cli','$celular_cli')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/projetoloja/clientes.php");
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
    <title>Cadastro de Clientes</title>
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
    <h1>Cadastro de Clientes</h1>
    <form action="cadastro_clientes.php" method="post">
        <div class="form-input">
            <label for="nome_cli">Nome</label>
            <input type="text" id="nome_cli" name="nome_cli" required>
        </div>

        <div class="form-input">
            <label for="data_nascimento_cli">Data de Nascimento</label>
            <input type="date" id="data_nascimento_cli" name="data_nascimento_cli" required="">
        </div>

        <div class="form-input">
            <label for="celular_cli">celular</label>
            <input type="text" id="celular_cli" name="celular_cli" required>
        </div>


        <div class="form-input">
            <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
        </div>
    </form>
</body>
</html>