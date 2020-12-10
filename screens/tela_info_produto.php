<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/info_produto_style.css">
    <link rel="stylesheet" href="css/global.css">
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

    $(function() {
        $("#nav-bar").load("./components/navbar.php");
    });
</script>

<body>
    <?php
    session_start();
    include '../Database/conexao.php';
    ?>

    <div id="nav-bar"></div>

    <ul class="sidenav" id="mobile-nav">
        <h4 class="title">Chosen</h4>
        <li><a href="/ProjetoPacECommerce/index.php"><i class="material-icons">home</i>Início</a></li>
        <li><a href="/ProjetoPacECommerce/Screens/telaprodutos.php"><i class="material-icons">local_grocery_store</i>Produtos</a></li>
        <li><a href="/ProjetoPacECommerce/Screens/telapromocoes.php"><i class="material-icons">local_offer</i>Promocoes</a></li>
        <li><a href="/ProjetoPacECommerce/Screens/telalancamentos.php"><i class="material-icons">whatshot</i>Lançamentos</a></li>
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
                <li><a href='/ProjetoPacECommerce/Screens/tela_carrinho.php'><i class='material-icons'>local_grocery_store</i>Carrinho</a></li>
                <li><a id='logout' href='/ProjetoPacECommerce/App/logout.php'><i class='material-icons'>input</i>Sair</a></li>";
        } else {
            echo "
                        <li><a id='cadastrar' href='/ProjetoPacECommerce/Screens/telacadastro.php'><i class='material-icons'>person_add</i>Cadastrar-se</a></li>
                        <li><a id='entrar' href='/ProjetoPacECommerce/Screens/telalogin.php'><i class='material-icons'>input</i>Entrar</a></li>
                        ";
        }
        ?>
    </ul>

    <?php
    $var = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM produtos WHERE Prod_ID = '$var'";
    $condicao = mysqli_query($con, $sql);
    if (mysqli_num_rows($condicao) > 0) {
        $registro = mysqli_fetch_array($condicao);
        $nomeres = $registro['Prod_Nome'];
        $imagemres = $registro['Prod_Imagem'];
        $precoantigo = $registro['Prod_Preco_Antigo'];
        $descres = $registro['Prod_Descricao'];
        $precores = $registro['Prod_Preco'];
        $qtdres = $registro['Prod_Quantidade'];
    }
    echo "
        <div class='spacing'>
            <div class='card card-size'>
                <div class='card-image'>
                <img src='$imagemres'>
                </div>
            </div>

            <div class='flex-column'>
                <h2 class='desktop'>$nomeres</h2>
                
                <div class='card-content'>
                    <div class='flex-items'>";
                    if ($precoantigo != null) {
                        echo "<p class='discount'>De: R$ $precoantigo</p>";
                    }
                    echo"
                        <p class='quantity'>Quantidade Disponível: $qtdres</p>
                    </div>
                    <h5>Por: $precores</h5>
                    <h6>Em até 12x sem juros</h6>
                </div>

                <form method='post' action='/ProjetoPacECommerce/App/adicionar_produto_carrinho.php?id=$var'>
                <div class='addcart'>
                    <div class='input-field col s6'>
                        <input name='quantity' id='quantity' type='text' class='validate'>
                        <label for='quantity'>Quantidade</label>
                    </div>
                    <button class='waves-effect waves-light btn-small dark-mode' type='submit'>Adicionar ao Carrinho</button>
                </div>
                </form>
                <br>
                <hr>
                <h4>Descrição</h4>
                <h5 class='desc'>$descres</h5>
            </div>
        </div>";
    ?>

</body>

</html>