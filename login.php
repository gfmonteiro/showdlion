<!DOCTYPE html> <!-- Indica qual versão HTML deve ser renderizada -->
    <html lang="pt-br"> <!-- Mecanismo de busca idioma -->
    <head> <!-- Informações sobre o documento -->
        <meta charset="utf-8"> <!-- Codificação de Linguagem-->
        <title> DGP Games </title>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta  charset = "UTF-8 " >
        <meta  http-equiv = "X-UA-Compatible"  content = "IE = edge">
        <meta  name = "viewport "  content = "width = device-width, initial-scale = 1.0">
    <title> Login </title>
</head>
<corpo>
    <h1> Login </h1>
    <form  action = "realiza_login.php"  method = "POST">
        <!--Campo de nome de usuário-->
        <label  for = "login" > Usuário: </label>
        <input  type = "text"  name = "login"  id = "login"  obrigatório>
    
        <!--Campo de senha-->
        <label  for = "senha" > Senha: </label>
        <input  type = "senha"  name = "senha"  id = "senha"  necessária>
        <input  type = "submit"  name = "btnLogin"  id = "btnLogin"  value = "Entrar">
    </form>
</body>
</html>