<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">

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
</script>

<body>
    <?php
    session_start();
    include 'conexao.php';

    echo "
    <nav class='nav-extended'>
        <div class='nav-wrapper'>
            <a href='index.php' class='brand-logo'>ECommerce</a>

            <a href='#' class='sidenav-trigger' data-target='mobile-nav'>
                <i class='material-icons'>menu</i>
            </a>

            <ul id='nav-mobile' class='right hide-on-med-and-down'>
                <li><a href='telaprodutos.php'>Produtos</a></li>
                <li><a href='telapromocoes.php'>Promoção</a></li>
                <li><a href='#'>Lançamentos</a></li>
               ";
    if (isset($_SESSION['login'])) {
        $var = $_SESSION['login'];
        $sql = "SELECT Cliente_Nome FROM clientes WHERE Cliente_Email = '$var'";
        $condicao = mysqli_query($con, $sql);
        if (mysqli_num_rows($condicao) > 0) {
            $registro = mysqli_fetch_array($condicao);
            $nomeCliente = $registro['Cliente_Nome'];
        }
        echo "
                        <li>$nomeCliente</li>
                        <li><a id='logout' href='logout.php'><i class='material-icons'>input</i></a></li>";
    } else {
        echo "
                        <li><a id='cadastrar' href='telacadastro.php'>Cadastrar-se</a></li>
                        <li><a id='entrar' href='telalogin.php'>Entrar</a></li>
                        ";
    }
    echo "
                <li><a href='#'><i class='material-icons'>local_grocery_store</i></a></li>
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
            <h2 class="product-text">Produtos</h2>
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
                        $precoantigo = $registro['Prod_Preco_Antigo'];
                        $nomeres = $registro['Prod_Nome'];
                        $precores = $registro['Prod_Preco'];
                        $qtdres = $registro['Prod_Quantidade'];
                        echo "
                <div class='card spacing card-size'>
                <a href='tela_info_produto.php?id=$idres'>
                    <div class='card-image'>
                        <img src='https://picsum.photos/600'>
                        <span class='card-title'>$nomeres</span>
                        <a class='btn-floating halfway-fab waves-effect waves-light dark-mode'><i class='material-icons'>local_grocery_store</i></a>
                    </div>
                    <div class='card-content'>";
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
                        $precoantigo = $registro['Prod_Preco_Antigo'];
                        $nomeres = $registro['Prod_Nome'];
                        $precores = $registro['Prod_Preco'];
                        $qtdres = $registro['Prod_Quantidade'];
                        echo "
                        <div id='card' class='card spacing card-size'>
                        <a href='tela_info_produto.php?id=$idres'>
                            <div class='card-image'>
                                <img src='https://picsum.photos/600'>
                                <span class='card-title'>$nomeres</span>
                                <a class='btn-floating halfway-fab waves-effect waves-light dark-mode'><i class='material-icons'>local_grocery_store</i></a>
                            </div>
                            <div class='card-content'>";
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

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large dark-mode">
                <i class="large material-icons">whatshot</i>
            </a>
            <ul>
                <li><a class="btn-floating dark-mode"><i class="material-icons">local_grocery_store</i></a></li>
                <li><a class="btn-floating dark-mode darken-1"><i class="material-icons">local_offer</i></a></li>
            </ul>
        </div>
    </main>

    <footer class="page-footer dark-mode">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Contate a loja através do e-mail</h5>
                    <p class="grey-text text-lighten-4">suporte@gmail.com</p>
                    <form action="#">
                        <br>
                        <textarea name="message" rows="10" cols="30" placeholder="Informe sua mensagem aqui"></textarea>
                        <br><br>
                        <input class="btn light-mode btn-hover" type="submit" />
                    </form>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h4 class="white-text">Desenvolvedores</h4>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Frederico Stein</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gustavo Bosco</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Matheus Tambosi</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">João Tomio</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">João Belli</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Vitor Adriel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Senaizada ECommerce
            </div>
        </div>
    </footer>

</body>

</html>