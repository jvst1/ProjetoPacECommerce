<?php
include '../Database/conexao.php';
session_start();
$nomeproduto = $_POST['nomeproduto'];
$precoproduto = $_POST['preco'];
$qdproduto = $_POST['estoque'];
$imgproduto = $_POST['imagem'];
// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (empty($nomeproduto) || empty($precoproduto) || empty($qdproduto) || empty($imgproduto)) {
    $_SESSION['erroCampos'] = "<div class='erro'>Preencha todos os campos!</div>";
    header('location: ../telacadprodutos.php');
    // echo  "<div class='erro'>Preencha todos os campos!</div>";
} elseif ($senha == $confirmesenha) {
    $sql = "INSERT INTO produtos(Prod_Nome,Prod_Preco,Prod_Quantidade,Prod_Imagem) VALUES ('$nomeproduto','$precoproduto','$qdproduto','$imgproduto')";
    session_destroy();
}
if (mysqli_query($con, $sql)) {
    header('location: ../index.php');
}
