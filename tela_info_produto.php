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
    <nav class="nav-extended">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">ECommerce</a>

            <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                <i class="material-icons">menu</i>
            </a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Promoção</a></li>
                <li><a href="#">Lançamentos</a></li>
                <li><a href='telacadastro.php'>Cadastrar-se</a></li>
                <li><a href='telalogin.php'>Entrar</a></li>
                <li><a href='#'><i class="material-icons">local_grocery_store</i></a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="#"><i class="material-icons">local_grocery_store</i>Produtos</a></li>
        <li><a href="#"><i class="material-icons">local_offer</i>Promocoes</a></li>
        <li><a href="#"><i class="material-icons">whatshot</i>Lançamentos</a></li>
        <li><a href="#"><i class="material-icons">search</i>Pesquisa</a></li>
    </ul>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large dark-mode">
            <i class="large material-icons">whatshot</i>
        </a>
        <ul>
            <li><a class="btn-floating dark-mode"><i class="material-icons">local_grocery_store</i></a></li>
            <li><a class="btn-floating dark-mode darken-1"><i class="material-icons">local_offer</i></a></li>
        </ul>
    </div>
        <?php
                include 'conexao.php';
                include 'conexao.php';
                session_start();
                $var = htmlspecialchars($_GET['id']);
                $sql = "SELECT * FROM produtos WHERE Prod_ID = '$var'";
                $condicao = mysqli_query($con, $sql);
                if(mysqli_num_rows($condicao) > 0){
                    $registro = mysqli_fetch_array($condicao);
                    $nomeres = $registro['Prod_Nome'];
                    $precores = $registro['Prod_Preco'];
                    $qtdres = $registro['Prod_Quantidade'];
                }
    echo"
    <div class='spacing'>
        <div class='card card-size'>
            <div class='card-image'>
                <img src='https://picsum.photos/600'>
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
            <h5>O empenho em analisar o início da atividade geral de formação de atitudes acarreta um processo de reformulação e modernização dos relacionamentos verticais entre as hierarquias</h5>
        </div>
    </div>"
    ?>

</body>
</html>