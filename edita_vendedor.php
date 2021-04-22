<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id_vendedor']) and !empty($_REQUEST['id_vendedor'])) {

    $id_vendedor = $_REQUEST['id_vendedor'];

    $sql = "SELECT * FROM vendedores WHERE id_vendedor = {$id_vendedor}";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $vendedores = $res->fetch_assoc();
    } else {
        echo "<p>Vendedor não encontrado, volte a listagem</p>";
        echo "<a href='vendedores.php'>Listagem de Vendedores</a>";
    }

} else {
    header("Location: vendedores.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
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
    <h1>Editar Vendedor <?php echo $vendedores['nome_vendedor']; ?></h1>
    <form action="salva_vendedor.php?id_vendedor=<?php echo $id_vendedor; ?>" method="post">
        <div class="form-input">
            <label for="nome_vendedor">Nome</label>
            <input type="text" id="nome_vendedor" name="nome_vendedor" value="<?php echo $vendedores['nome_vendedor'] ?>" required>
        </div>

        <div class="form-input">
            <label for="email_vendedor">Email</label>
            <input type="email_vendedor" id="email_vendedor" name="email_vendedor" value="<?php echo $vendedores['email_vendedor'] ?>" required>
        </div>


        <div class="form-input">
            <label for="data_nascimento_vendedor">Data de Nascimento</label>
            <input type="date" id="data_nascimento_vendedor" name="data_nascimento_vendedor" value="<?php echo $vendedores['data_nascimento_vendedor'] ?>" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>