<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id_cli']) and !empty($_REQUEST['id_cli'])) {

    $id_cli = $_REQUEST['id_cli'];

    $sql = "SELECT * FROM clientes WHERE id_cli = {$id_cli}";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $clientes = $res->fetch_assoc();
    } else {
        echo "<p>Cliente não encontrado, volte a listagem</p>";
        echo "<a href='clientes.php'>Listagem de Clientes</a>";
    }

} else {
    header("Location: clientes.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
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
    <h1>Editar Cliente <?php echo $clientes['nome_cli']; ?></h1>
    <form action="salva_cliente.php?id_cli=<?php echo $id_cli; ?>" method="post">
        <div class="form-input">
            <label for="nome_cli">Nome</label>
            <input type="text" id="nome_cli" name="nome_cli" value="<?php echo $clientes['nome_cli'] ?>" required>
        </div>

        <div class="form-input">
            <label for="data_nascimento_cli">Data de Nascimento</label>
            <input type="date" id="data_nascimento_cli" name="data_nascimento_cli" value="<?php echo $clientes['data_nascimento_cli'] ?>" required>
        </div>

        <div class="form-input">
            <label for="celular_cli">Celular</label>
            <input type="text" id="celular_cli" name="celular_cli" value="<?php echo $clientes['celular_cli'] ?>" required>
        </div>


        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>