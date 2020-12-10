<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/global.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ECommerce Pac2</title>
</head>

<script>
    $(function() {
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
    });

    $(function() {
        $("#nav-bar").load("./components/navbar.php");
    });

    $(function() {
        $("#footer").load("./components/footer.html");
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

    <main>
        <section class="searchBar">
            <form method="get">
                <div class="input-field search-size dark-mode">
                    <input id="search" type="search" placeholder="Pesquise..." name="pesquisa" required>
                    <label class="label-icon" for="search"><button type="submit" style="background:transparent; border:none;"><i class="material-icons">search</i></button></label>
                    <i class="material-icons right">close</i>
                </div>
            </form>
        </section>
        <section class="second-page">
            <h2 class="product-text">Promoções</h2>
            <?php

            if (isset($_GET['pesquisa'])) {
                $valor_pesquisar = $_GET['pesquisa'];
                $result_ferramenta = "SELECT * FROM produtos where Prod_Nome like '%$valor_pesquisar%' AND Prod_Promocao = '1'";
                $resultado_ferramenta = mysqli_query($con, $result_ferramenta);
                if (mysqli_num_rows($resultado_ferramenta) > 0) {
                    echo "<div class='list-products2'>";
                    while ($registro = mysqli_fetch_array($resultado_ferramenta)) {
                        $idres = $registro['Prod_ID'];
                        $_SESSION['id'] = $idres;
                        $imagemres = $registro['Prod_Imagem'];
                        $precoantigo = $registro['Prod_Preco_Antigo'];
                        $nomeres = $registro['Prod_Nome'];
                        $precores = $registro['Prod_Preco'];
                        $qtdres = $registro['Prod_Quantidade'];
                        echo "
                <div class='card spacing card-size'>
                <a href='tela_info_produto.php?id=$idres'>
                    <div class='card-image'>
                        <img class='image-size' src='$imagemres'>
                        <a class='btn-floating halfway-fab waves-effect waves-light dark-mode'  href='/ProjetoPacECommerce/App/adicionar_produto_carrinho.php?id=$idres'><i class='material-icons'>local_grocery_store</i></a>
                    </div>
                    <div class='card-content'>
                    <span class='text-black'>$nomeres</span>";
                        if ($precoantigo != null) {
                            echo "<p class='discount'>R$ $precoantigo</p>";
                        }
                        echo "
                        <h5>R$ $precores</h5>
                    </div>
                </a>
                </div>
            ";
                    }
                }
                echo "</div>";
            } else {
                $valor_pesquisar = '';
                $sql = "SELECT * FROM produtos where Prod_Promocao = '1'";
                $condicao = mysqli_query($con, $sql);
                if (mysqli_num_rows($condicao) > 0) {
                    echo "<div class='list-products2'>";
                    while ($registro = mysqli_fetch_array($condicao)) {
                        $idres = $registro['Prod_ID'];
                        $_SESSION['id'] = $idres;
                        $imagemres = $registro['Prod_Imagem'];
                        $precoantigo = $registro['Prod_Preco_Antigo'];
                        $nomeres = $registro['Prod_Nome'];
                        $precores = $registro['Prod_Preco'];
                        $qtdres = $registro['Prod_Quantidade'];
                        echo "
                        <div id='card' class='card spacing card-size'>
                        <a href='tela_info_produto.php?id=$idres'>
                            <div class='card-image'>
                                <img class='image-size' src='$imagemres'>
                                <a class='btn-floating halfway-fab waves-effect waves-light dark-mode'  href='/ProjetoPacECommerce/App/adicionar_produto_carrinho.php?id=$idres'><i class='material-icons'>local_grocery_store</i></a>
                            </div>
                            <div class='card-content'>
                            <span class='text-black'>$nomeres</span>";
                        if ($precoantigo != null) {
                            echo "<p class='discount'>R$ $precoantigo</p>";
                        }
                        echo "
                                <h5>R$ $precores</h5>
                            </div>
                        </a>
                        </div>
                    ";
                    }
                    echo "</div>";
                }
            }

            ?>
        </section>

        
    </main>

    <div id="footer"></div>

</body>

</html>