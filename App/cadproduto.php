<?php
    include '../Database/conexao.php';
    session_start();
    $nomeproduto = $_POST ['nomeproduto'];
    $precoproduto = $_POST ['preco'];
    $qdproduto = $_POST ['estoque'];
    $url_imagem = $_POST['imagem'];
    $descricao = $_POST['descricao'];
 // Check connection
    if($con === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(empty($nomeproduto)||empty($precoproduto)||empty($qdproduto))
    {
        $_SESSION['erroCampos'] = "<div class='erro'>Preencha todos os campos!</div>";
        header('location: ../screens/telacadprodutos.php');
        // echo  "<div class='erro'>Preencha todos os campos!</div>";
    }
    elseif($senha==$confirmesenha)
    {
        $sql = "INSERT INTO produtos(Prod_Nome,Prod_Preco,Prod_Quantidade,Url_imagem,Prod_Descricao) VALUES ('$nomeproduto','$precoproduto','$qdproduto','$url_imagem','$descricao')";
        session_destroy();
    }
    if(mysqli_query($con, $sql))
    {
        header('location: ../index.php');
    }
?>