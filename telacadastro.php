<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/cadstyle.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script><!--mask cpf-->
    <title>ECommerce Pac2</title>
</head>

<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>

<body>
    <nav class="blue" style="padding:0px 10px; position: fixed;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Pac2</a>

            <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down ">
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Promoções</a></li>
                <li><a href="#">Lançamentos</a></li>
                <li><a href="#">Pesquisa</a></li>
                <li><a href="#">Entrar</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="#"><i class="material-icons">local_grocery_store</i>Produtos</a></li>
        <li><a href="#"><i class="material-icons">local_offer</i>Promocoes</a></li>
        <li><a href="#"><i class="material-icons">whatshot</i>Lançamentos</a></li>
        <li><a href="#"><i class="material-icons">search</i>Pesquisa</a></li>
        <li><a href="telalogin.php"><i class="material-icons">person</i>Entrar</a></li>
    </ul>
    
    <div class="container">
    <?php
        session_start();
        if(isset($_SESSION['erroCampos'])){
            echo $_SESSION['erroCampos'];
            session_destroy();
        }
    ?>
        <form method = "post" action = "cad.php">
            <h5>Cadastre-se</h5>
            <label>Nome Completo*</label>
            <input type="text" name="nomecompleto" id="nomecompleto" placeholder="Nome Completo">
            <label>E-mail*</label>
            <input type="text" name="usuario" id="usuario" placeholder="Exemplo@exemplo.com.br">
            <label>CPF*</label>
            <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00');">
            <label>Número de Telefone*</label>
            <input type="text" name="telefone" id="telefone" placeholder="(00) 0 0000-0000" onkeypress="$(this).mask('(00) 0 0000-0000')">
            <label>Dados de Endereço*</label>
            <br>
            <label>Nome da Rua*</label>
            <input type="text" name="endereco" id="endereco" placeholder="Nome da rua" >
            <label>Bairro*</label>
            <input type="text" name="bairro" id="bairro" placeholder="Bairro" >
            <label>Cidade*</label>
            <input type="text" name="cidade" id="cidade" placeholder="Cidade" >
            <label>Estado*</label>
            <input type="text" name="estado" id="estado" placeholder="Estado" >
            <label>Número de Endereço*</label>
            <input type="number" name="num" id="num" placeholder="Numero de Endereco" >
            <label>CEP*</label>
            <input type="number" name="cep" id="cep" placeholder="CEP" >
            <label>Senha*</label>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <label>Confirme sua Senha*</label>
            <input type="password" name="senhaconfirm" id="senhaconfirm" placeholder="Senha">
            <button type="submit" class="btn waves-effect waves-light btn-large blue">Cadastrar</button>
        </form>
    </div>



</body>

</html>