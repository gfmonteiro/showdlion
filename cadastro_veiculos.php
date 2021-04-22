<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;
    
    if (isset($_REQUEST['nome_car']) && !empty($_REQUEST['nome_car'])) {
        $nome_car = $_REQUEST['nome_car'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['valor_car']) && !empty($_REQUEST['valor_car'])) {
        $valor_car = $_REQUEST['valor_car'];
    } else {
        $erro = 1;
    }

    } else {
        $erro = 1;
    }

    if (!$erro) {
        $sql = "INSERT INTO veiculos (nome_car, valor_car) VALUES ('$nome_car','$valor_car')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/projetoloja/veiculos.php");
        } else {
            echo "Erro ao executar o SQL";
        }
    } ##else {
       ## echo "Erro nos dados. Falta algum valor";
    ##}


?>


<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
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
    <h1>Cadastro de Veículos</h1>
    <form action="cadastro_veiculos.php" method="post">
        <div class="form-input">
            <label for="nome_car">Descrição</label>
            <input type="text" id="nome_car" name="nome_car" required>
        </div>


        <div class="form-input">
            <label for="valor_car">Valor R$</label>
            <input type="text" id="valor_car" name="valor_car" required>
        </div>


        <div class="form-input">
            <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
        </div>
    </form>
</body>
</html>