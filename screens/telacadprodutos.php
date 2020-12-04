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
    <?php
    
if (isset($_SESSION['login'])) {
    $var = $_SESSION['login'];
    $sql = "SELECT Cliente_Nome FROM clientes WHERE Cliente_Email = '$var'";
    $condicao = mysqli_query($con, $sql);
    if (mysqli_num_rows($condicao) > 0) {
        $registro = mysqli_fetch_array($condicao);
        $nomeCliente = $registro['Cliente_Nome'];
    }
    echo "
        <nav class='nav-extended'>
            <div class='nav-wrapper'>
                <a href='index.php' class='brand-logo'>Chosen</a>

                <a href='#' class='sidenav-trigger' data-target='mobile-nav'>
                    <i class='material-icons'>menu</i>
                </a>

                <ul id='nav-mobile' class='right hide-on-med-and-down'>
                    <li><a href='telaprodutos.php'>Produtos</a></li>
                    <li><a href='telapromocoes.php'>Promoção</a></li>
                    <li>$nomeCliente</li>
                    <li><a id='logout' href='../App/logout.php'><i class='material-icons'>input</i></a></li>
    ";
} else {
    echo "
    <nav class='nav-extended'>
        <div class='nav-wrapper'>
            <a href='index.php' class='brand-logo'>Chosen</a>

            <a href='#' class='sidenav-trigger' data-target='mobile-nav'>
                <i class='material-icons'>menu</i>
            </a>

            <ul id='nav-mobile' class='right hide-on-med-and-down'>
                <li><a href='telaprodutos.php'>Produtos</a></li>
                <li><a href='telapromocoes.php'>Promoção</a></li>
                <li><a id='cadastrar' href='telacadastro.php'>Cadastrar-se</a></li>
                <li><a id='entrar' href='telalogin.php'>Entrar</a></li>
    ";
}echo "
                <li><a href='tela_carrinho.php'><i class='material-icons'>local_grocery_store</i></a></li>
            </ul>
        </div>
    </nav>
";
?>

    <div class="content">
        <div class="container">
            <?php
            session_start();
            if (isset($_SESSION['erroCampos'])) {
                echo $_SESSION['erroCampos'];
                session_destroy();
            }
            ?>
            <form method="post" action="../App/cadproduto.php">
                <h3>Cadastro de produto</h3>
                <label for="nomeproduto">Nome Produto*</label>
                <input type="text" name="nomeproduto" id="nomeproduto" placeholder="Nome do Produto">
                <label for="preco">Preço Produto*</label>
                <input type="text" name="preco" id="preco" placeholder="Preco do Produto">
                <label for="estoque">Quantidade no Estoque*</label>
                <input type="text" name="estoque" id="estoque" placeholder="Quantidade do estoque">
                <label for="imagem">URL da imagem*</label>
                <input type="url" name="imagem" id="imagem" placeholder="URL da imagem">
                <label for="descricao">Descrição do produto*</label>
                <input type="text" name="descricao" id="descricao">
                <button type="submit" class="btn waves-effect waves-light btn-large dark-mode spacing">Cadastrar</button>
            </form>
        </div>
    </div>


</body>

</html>