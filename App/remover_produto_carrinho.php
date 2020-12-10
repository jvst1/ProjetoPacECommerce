<?php
    include '../Database/conexao.php';
    session_start();
    $var = $_SESSION['login'];
    $qtdprod = $_POST['quantity'];
    $idprod = htmlspecialchars($_GET['id']);
    //Remove o produto do carrinho
    $deleteProdutoCarrinho = "DELETE FROM produtos_pedido WHERE email_cliente = '$var' AND cod_prod = '$idprod' AND prod_finalizado = '0'";
    $executarDeleteProdutoCarrinho = mysqli_query($con, $deleteProdutoCarrinho);
    header('location: ../Screens/tela_carrinho.php');
?>