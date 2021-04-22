<?php

include "valida_login.php";
include 'conexao.php';

$errors = array();
$erro = False;

if (isset($_REQUEST['btnLogin'])) {

    if (isset($_REQUEST['login']) && !empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
    } else {
        $erro = True;
        $errors[] = "Campo de usuário vazio";
    }

    if (isset($_REQUEST['senha']) && !empty($_REQUEST['senha'])) {
        $senha = $_REQUEST['senha'];
    } else {
        $erro = True;
        $errors[] = "Campo de senha vazio";
    }

    if (!$erro) {
        
        $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' LIMIT 1";
        $res = mysqli_query($connection, $sql);

        if (mysqli_num_rows($res) == 1) {
         
            $dados = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION["nome"] = $dados['nome'];
            $_SESSION["email"] = $dados['email'];
            $_SESSION["username"] = $dados['login'];
            $_SESSION["login"] = True;

            header("Location: index.php");

        } else {

            $errors[] = "Login ou senha incorretos";
            $erro = True;

            header("Location: login.php");
        }   
        

    } else {
        header("Location: login.php");
    }

}

?>