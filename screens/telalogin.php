<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/global.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login</title>
</head>

<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>

<body>

    <div class="content">
        <div class="container">
            <h3>Login</h3>
            <form method="post" action="../App/sessao.php">
                <label>E-mail</label>
                <input type="text" name="email" id="email" placeholder="Exemplo@exemplo.com.br">
                <br>
                <label>Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <div class="flex">
                    <button id="btnlogin" type="submit" class="btn waves-effect waves-light btn-large dark-mode spacing">Entrar</button>
                    <a id="cadtelalogin" href="telacadastro.php" class="btn waves-effect waves-light btn-large dark-mode spacing desktop">Cadastrar</a>
                </div>
                <a href="telacadastro.php" class="waves-effect spacing mobile"><u>Ainda não tem conta? Registre-se agora mesmo</u></a>
            </form>
        </div>
    </div>

</body>

</html>