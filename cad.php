<?php
    include 'conexao.php';
    session_start();
    $email = $_POST ['usuario'];
    $nome = $_POST ['nomecompleto'];
    $CPF = $_POST ['cpf'];
    $senha =  md5($_POST['senha']);
    $confirmesenha = md5($_POST['senhaconfirm']);
    $numerotelefone = $_POST ['telefone'];
    $endereco = $_POST ['endereco'];
    $bairro = $_POST ['bairro'];
    $cidade = $_POST ['cidade'];
    $estado = $_POST ['estado'];
    $num = $_POST ['num'];
    $cep = $_POST ['cep'];
 // Check connection
    if($con === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(empty($nome)||empty($email)||empty($CPF)||empty($numerotelefone)||empty($senha)||empty($confirmesenha)||empty($endereco)||empty($bairro)||empty($cidade)||empty($estado)||empty($num)||empty($cep))
    {
        $_SESSION['erroCampos'] = "<div class='erro'>Preencha todos os campos!</div>";
        header('location: telacadastro.php');
        // echo  "<div class='erro'>Preencha todos os campos!</div>";
    }
    elseif($senha==$confirmesenha)
    {
        $sql = "INSERT INTO clientes(Cliente_Nome,Cliente_Senha,Cliente_Email,Cliente_CPF,Cliente_Telefone,Cliente_Endereco,Cliente_Bairro,Cliente_Cidade,Cliente_Estado,Cliente_Endereco_Numero,Cliente_CEP) VALUES ('$nome','$senha','$email','$CPF','$numerotelefone','$endereco','$bairro','$cidade','$estado','$num','$cep')";
        session_destroy();
    }
    if(mysqli_query($con, $sql))
    {
        header('location: telalogin.php');
    }
?>