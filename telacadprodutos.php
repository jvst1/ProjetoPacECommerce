<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/cadstyle.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!--mask cpf-->
    <title>ECommerce Pac2</title>
</head>

<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('select').formSelect();
    });
</script>

<body>

    <div class="content">
        <div class="container">
            <?php
            session_start();
            if (isset($_SESSION['erroCampos'])) {
                echo $_SESSION['erroCampos'];
                session_destroy();
            }
            ?>
            <form method="post" action="cadproduto.php">
                <h3>Cadastre-se</h3>
                <label>Nome Produto*</label>
                <input type="text" name="nomeproduto" id="nomeproduto" placeholder="Nome do Produto">
                <label>Preço Produto*</label>
                <input type="text" name="preco" id="preco" placeholder="Preco do Produto">
                <label>Quantidade no Estoque*</label>
                <input type="text" name="estoque" id="estoque" placeholder="Quantidade do estoque">
                <button type="submit" class="btn waves-effect waves-light btn-large dark-mode spacing">Cadastrar</button>
            </form>
        </div>
    </div>


</body>

</html>