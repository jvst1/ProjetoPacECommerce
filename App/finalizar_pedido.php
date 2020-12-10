<?php
    session_start();
    include '../Database/conexao.php';
    $preco = htmlspecialchars($_GET['preco']);
    $var = $_SESSION['login'];
    $insertPedido = "INSERT INTO pedido (Pedido_Cliente,Pedido_Valor_Total) VALUES ('$var','$preco')";
    $inserrirPedido = mysqli_query($con, $insertPedido);
    $sql = "SELECT * FROM produtos_pedido WHERE email_cliente = '$var' and prod_finalizado = '0'";
        $condicao = mysqli_query($con, $sql);
        if (mysqli_num_rows($condicao) > 0) {
            while ($registro = mysqli_fetch_array($condicao)) {
                $idres = $registro['cod_prod'];
                $qtdres = $registro['qtd_prod'];
                $verificarEstoque = "SELECT * FROM Produtos where Prod_ID = '$idres'";
                $execVerificaEstoque = mysqli_query($con, $verificarEstoque);
                if (mysqli_num_rows($execVerificaEstoque) > 0) {
                    while ($registroEstoque = mysqli_fetch_array($execVerificaEstoque)) {
                    $qtdEstoque = $registroEstoque['Prod_Quantidade'];
                    $estoqueAtualizado = $qtdEstoque - $qtdres;
                    $updateQtdEstoque = "UPDATE produtos SET prod_quantidade = '$estoqueAtualizado' WHERE Prod_ID = '$idres'";
                    $execUpdateQtdEstoque = mysqli_query($con, $updateQtdEstoque);
                }
            }
        }
    }
    $updateProdFinalizado = "UPDATE produtos_pedido SET prod_finalizado = '1' WHERE email_cliente = '$var' and prod_finalizado = '0'";
    $atualizarProd = mysqli_query($con, $updateProdFinalizado);
    header('location: ../index.php');
?>