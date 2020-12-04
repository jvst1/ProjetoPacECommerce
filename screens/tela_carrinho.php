<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/tela_carrinho.css">
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
                <a href='../index.php' class='brand-logo'>Chosen</a>

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
            <a href='../index.php' class='brand-logo'>Chosen</a>

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

    <main>
        <div class="container">
            <div class="item-complete">
                <div class="itens">
                    <div class='card card-size image'>
                        <div class='card-image'>
                            <img src='https://picsum.photos/500'>
                        </div>
                    </div>
                    <div class="info">
                        <h6><b>Nome:</b> Teste Produto</h6>
                        <h6><b>Preço:</b> R$ 230,00</h6>
                        <div class="adicionarquantidade">
                            <h6 class="space-count increase-count">-</h6>
                            <h6 class="space-count"><b>2</b></h6>
                            <h6 class="space-count increase-count">+</6>
                        </div>
                    </div>
                </div>
                <h5><b>Subtotal: </b>R$ 460,00</h5>
            </div>
            <div class="divider"></div>
            <div class="item-complete">
                <div class="itens">
                    <div class='card card-size image'>
                        <div class='card-image'>
                            <img src='https://picsum.photos/500'>
                        </div>
                    </div>
                    <div class="info">
                        <h6><b>Nome:</b> Teste Produto</h6>
                        <h6><b>Preço:</b> R$ 230,00</h6>
                        <div class="adicionarquantidade">
                            <h6 class="space-count increase-count">-</h6>
                            <h6 class="space-count"><b>5</b></h6>
                            <h6 class="space-count increase-count">+</6>
                        </div>
                    </div>
                </div>
                <h5><b>Subtotal: </b>R$ 1.150,00</h5>
            </div>
        </div>
        <div class="calccep mobile">
            <div class='input-field col s6'>
                <input id='quantity' type='text' class='validate'>
                <label for='quantity'>CEP</label>
            </div>
        </div>
        <div class="bgwhite mobile">
            <h4 class="total">Total dos Itens: <b>R$ 1.610,00</b></h4>
            <button class='waves-effect waves-light btn-small dark-mode'>Continuar a Compra</button>
        </div>

        <div class="container2">
            <div class='input-field col s6'>
                <input id='quantity' type='text' class='validate'>
                <label for='quantity'>CEP</label>
            </div>
            <h4 class="total">Total dos Itens: <b>R$ 1.610,00</b></h4>
            <button class='waves-effect waves-light btn-small dark-mode'>Continuar a Compra</button>
        </div>
    </main>

</body>

</html>