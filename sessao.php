<?php
include 'conexao.php';
    session_start();
    $email = $_POST ['email'];
    $senha =  md5($_POST['senha']);
 // Check connection
    if($con === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = "SELECT Cliente_Email FROM clientes WHERE Cliente_Email = '$email' AND Cliente_Senha = '$senha'";
    $condicao = mysqli_query($con, $sql);
    if(mysqli_num_rows($condicao) > 0){
         $_SESSION['login'] = $email;
         $_SESSION['txtsenha'] = $senha;
         if(isset($_SESSION['login'])){
             header('location: index.php');
         }else{
             header('location: telalogin.php');
         }
     }else{
         session_destroy();
         header('location: telalogin.php');
    }
?>