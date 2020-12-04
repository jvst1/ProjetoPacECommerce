<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/info_produto_style.css">
    <title>Informações Produto</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<script>
    $(function() {
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
    });
</script>

<body>
    <?php
    session_start();
    include '../Database/conexao.php';
    
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

    <ul class="sidenav" id="mobile-nav">
        <li><a href="#"><i class="material-icons">local_grocery_store</i>Produtos</a></li>
        <li><a href="#"><i class="material-icons">local_offer</i>Promocoes</a></li>
        <li><a href="#"><i class="material-icons">whatshot</i>Lançamentos</a></li>
        <li><a href="#"><i class="material-icons">search</i>Pesquisa</a></li>
    </ul>

    <div class="fixed-action-btn mobile">
        <a class="btn-floating btn-large dark-mode">
            <i class="large material-icons">whatshot</i>
        </a>
        <ul>
            <li><a class="btn-floating dark-mode"><i class="material-icons">local_grocery_store</i></a></li>
            <li><a class="btn-floating dark-mode darken-1"><i class="material-icons">local_offer</i></a></li>
        </ul>
    </div>

    <?php
    $var = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM produtos WHERE Prod_ID = '$var'";
    $condicao = mysqli_query($con, $sql);
    if (mysqli_num_rows($condicao) > 0) {
        $registro = mysqli_fetch_array($condicao);
        $nomeres = $registro['Prod_Nome'];
        $descres = $registro['Prod_Descricao'];
        $precores = $registro['Prod_Preco'];
        $qtdres = $registro['Prod_Quantidade'];
        $imagem = $registro['Url_imagem'];  
    }
    if(empty($imagem)){
        $imagem = "https://picsum.photos/600";
    }
    
    echo "
        <div class='spacing'>
            <div class='card card-size'>
                <div class='card-image'>
                    <img src='$imagem'>
                </div>
            </div>

            <div class='flex-column'>
                <h2 class='desktop'>$nomeres</h2>
                
                <div class='card-content'>
                    <div class='flex-items'>
                        <p class='discount'>R$ 250,99</p>
                        <p class='quantity'>Quantidade Disponível: $qtdres</p>
                    </div>
                    <h5>Por: $precores</h5>
                    <h6>Em até 12x sem juros</h6>
                </div>

                <div class='addcart'>
                    <div class='input-field col s6'>
                        <input id='quantity' type='text' class='validate'>
                        <label for='quantity'>Quantidade</label>
                    </div>
                    <button class='waves-effect waves-light btn-small dark-mode'>Adicionar ao Carrinho</button>
                </div>
                <br>
                <hr>
                <h4>Descrição</h4>
                <h5 class='desc'>$descres</h5>
            </div>
        </div>"
    ?>

</body>

</html>