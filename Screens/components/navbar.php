<?php
session_start();
include '../../Database/conexao.php';

echo "
    <nav class='nav-extended'>
        <div class='nav-wrapper'>
            <a href='/ProjetoPacECommerce/index.php' class='brand-logo'>Chosen</a>

            <a href='#' class='sidenav-trigger' data-target='mobile-nav'>
                <i class='material-icons'>menu</i>
            </a>

            <ul id='nav-mobile' class='right hide-on-med-and-down'>
                <li><a href='/ProjetoPacECommerce/Screens/telaprodutos.php'>Produtos</a></li>
                <li><a href='/ProjetoPacECommerce/Screens/telapromocoes.php'>Promoção</a></li>
                <li><a href='/ProjetoPacECommerce/Screens/telalancamentos.php'>Lançamentos</a></li>
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
                        <li class='text-size'>$nomeCliente</li>
                        <li><a id='logout' href='/ProjetoPacECommerce/App/logout.php'><i class='material-icons'>input</i></a></li>
                        <li><a href='/ProjetoPacECommerce/Screens/tela_carrinho.php'><i class='material-icons'>local_grocery_store</i></a></li>";
} else {
    echo "
                        <li><a id='cadastrar' href='/ProjetoPacECommerce/Screens/telacadastro.php'>Cadastrar-se</a></li>
                        <li><a id='entrar' href='/ProjetoPacECommerce/Screens/telalogin.php'>Entrar</a></li>
                        ";
}
echo "
            </ul>
        </div>
    </nav>
    ";
