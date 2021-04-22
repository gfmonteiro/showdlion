<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id_car']) and !empty($_REQUEST['id_car'])) {

    $id_car = $_REQUEST['id_car'];

    $sql = "SELECT * FROM veiculos WHERE id_car = {$id_car}";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $veiculos = $res->fetch_assoc();
    } else {
        echo "<p>Veículo não encontrado, volte a listagem</p>";
        echo "<a href='veiculos.php'>Listagem de Veículos</a>";
    }

} else {
    header("Location: veiculos.php");
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
    <h1>Editar Veiculo <?php echo $veiculos['nome_car']; ?></h1>
    <form action="salva_veiculo.php?id_car=<?php echo $id_car; ?>" method="post">
        <div class="form-input">
            <label for="nome_cli">Nome</label>
            <input type="text" id="nome_car" name="nome_car" value="<?php echo $veiculos['nome_car'] ?>" required>
        </div>

        <div class="form-input">
            <label for="valor_car">Valor R$</label>
            <input type="text" id="valor_car" name="valor_car" value="<?php echo $veiculos['valor_car'] ?>" required>
        </div>


        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>