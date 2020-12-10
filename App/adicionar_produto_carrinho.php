<?php
    include '../Database/conexao.php';
    session_start();
    $var = $_SESSION['login'];
    $qtdprod = $_POST['quantity'];
    $idprod = htmlspecialchars($_GET['id']);
    //Verificar se o produto ja esta no carrinho
    $searchProdCarrinho = "SELECT * FROM produtos_pedido WHERE email_cliente = '$var' AND cod_prod = '$idprod' AND prod_finalizado = '0'";
    //Executa Query
    $executarPesquisa = mysqli_query($con, $searchProdCarrinho);
    if($qtdprod > 0){
        if (mysqli_num_rows($executarPesquisa) > 0) {
            while ($registro = mysqli_fetch_array($executarPesquisa)) {
            $qtdProdCarrinho = $registro['qtd_prod'];
            $qtdTotal = $qtdprod + $qtdProdCarrinho;
            $verificarQtdEstoque = "SELECT * FROM produtos WHERE Prod_ID = '$idprod'";
            $executarVerificaEstoque = mysqli_query($con, $verificarQtdEstoque);
            if (mysqli_num_rows($executarVerificaEstoque) > 0) {
                $registroEstoque = mysqli_fetch_array($executarVerificaEstoque);
                $qtdProdEstoque = $registroEstoque['Prod_Quantidade'];
                echo"$qtdTotal";
                if($qtdProdEstoque >= $qtdTotal){
                    $aumentarQtdCarrinho = "UPDATE produtos_pedido SET qtd_prod = '$qtdTotal' WHERE  cod_prod = '$idprod' AND email_cliente = '$var' AND prod_finalizado = '0'";
                    $executarAumentoQtd = mysqli_query($con, $aumentarQtdCarrinho);
                    header('location: ../Screens/tela_carrinho.php');
                } else {
                    $_SESSION['erroQuantidade'] = "<div class='erro'>Quantidade Invalida!</div>";
                    header('location: ../Screens/tela_info_produto.php?id='.$idprod);
                }
            }
        } 
        } else{
            $verificarQtdEstoque = "SELECT * FROM produtos WHERE Prod_ID = '$idprod'";
            echo"$verificarQtdEstoque";
            $executarVerificaEstoque = mysqli_query($con, $verificarQtdEstoque);
            if (mysqli_num_rows($executarVerificaEstoque) > 0) {
                while ($registroEstoque = mysqli_fetch_array($executarVerificaEstoque)) {
                $qtdProdEstoque = $registroEstoque['Prod_Quantidade'];
                if($qtdProdEstoque >= $qtdprod){
                    $insertProdutoCarrinho = "INSERT INTO produtos_pedido (email_cliente,cod_prod,qtd_prod,prod_finalizado) VALUES ('$var','$idprod','$qtdprod','0')";
                    $execInserirProdutoCarrinho = mysqli_query($con, $insertProdutoCarrinho);
                    header('location: ../Screens/tela_carrinho.php');
                } else {
                    $_SESSION['erroQuantidade'] = "<div class='erro'>Quantidade Invalida!</div>";
                    header('location: ../Screens/tela_info_produto.php?id='.$idprod);
                }
            } 
        }
    }
    }
    if (mysqli_num_rows($executarPesquisa) > 0) {
        while ($registro = mysqli_fetch_array($executarPesquisa)) {
        $qtdProdCarrinho = $registro['qtd_prod'];
        $qtdProdCarrinho += 1;
        $verificarQtdEstoque = "SELECT * FROM produtos WHERE Prod_ID = '$idprod'";
        $executarVerificaEstoque = mysqli_query($con, $verificarQtdEstoque);
        if (mysqli_num_rows($executarVerificaEstoque) > 0) {
            $registroEstoque = mysqli_fetch_array($executarVerificaEstoque);
            $qtdProdEstoque = $registroEstoque['Prod_Quantidade'];
            if($qtdProdEstoque >= $qtdProdCarrinho){
                $aumentarQtdCarrinho = "UPDATE produtos_pedido SET qtd_prod = '$qtdTotal' WHERE  cod_prod = '$idprod' AND email_cliente = '$var' AND prod_finalizado = '0'";
                $executarAumentoQtd = mysqli_query($con, $aumentarQtdCarrinho);
                header('location: ../Screens/tela_carrinho.php');
            } else {
                $_SESSION['erroQuantidade'] = "<div class='erro'>Quantidade Invalida!</div>";
                header('location: ./index.php');
            }
        }
    } 
    } else{
        $verificarQtdEstoque = "SELECT * FROM produtos WHERE Prod_ID = '$idprod'";
        echo"$verificarQtdEstoque";
        $executarVerificaEstoque = mysqli_query($con, $verificarQtdEstoque);
        if (mysqli_num_rows($executarVerificaEstoque) > 0) {
            while ($registroEstoque = mysqli_fetch_array($executarVerificaEstoque)) {
            $qtdProdEstoque = $registroEstoque['Prod_Quantidade'];
            if($qtdProdEstoque >= 1){
                $insertProdutoCarrinho = "INSERT INTO produtos_pedido (email_cliente,cod_prod,qtd_prod,prod_finalizado) VALUES ('$var','$idprod','1','0')";
                $execInserirProdutoCarrinho = mysqli_query($con, $insertProdutoCarrinho);
                header('location: ../Screens/tela_carrinho.php');
            } else {
                $_SESSION['erroQuantidade'] = "<div class='erro'>Quantidade Invalida!</div>";
                header('location: ./index.php');
            }
        } 
    }
}
    header('location: ../Screens/tela_info_produto.php?id='.$idprod);
?>

