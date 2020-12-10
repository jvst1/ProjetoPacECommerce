<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/tela_carrinho.css">
    <link rel="stylesheet" href="css/global.css">
    <title>Informações Produto</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<script>
    $(function() {
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
    });

    $(function() {
        $("#nav-bar").load("./components/navbar.php");
    });
</script>

<body>
    <?php
    session_start();
    include '../Database/conexao.php';
    if (isset($_SESSION['login'])) {
        echo"
        <div id='nav-bar'></div>

        <ul class='sidenav' id='mobile-nav'>
            <h4 class='title'>Chosen</h4>
            <li><a href='/ProjetoPacECommerce/index.php'><i class='material-icons'>home</i>Início</a></li>
            <li><a href='/ProjetoPacECommerce/Screens/telaprodutos.php'><i class='material-icons'>local_grocery_store</i>Produtos</a></li>
            <li><a href='/ProjetoPacECommerce/Screens/telapromocoes.php'><i class='material-icons'>local_offer</i>Promocoes</a></li>
            <li><a href='/ProjetoPacECommerce/Screens/telalancamentos.php'><i class='material-icons'>whatshot</i>Lançamentos</a></li>
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
                    <li><a href='/ProjetoPacECommerce/Screens/tela_carrinho.php'><i class='material-icons'>local_grocery_store</i>Carrinho</a></li>
                    <li><a id='logout' href='/ProjetoPacECommerce/App/logout.php'><i class='material-icons'>input</i>Sair</a></li>";
            } else {
                echo "
                            <li><a id='cadastrar' href='/ProjetoPacECommerce/Screens/telacadastro.php'><i class='material-icons'>person_add</i>Cadastrar-se</a></li>
                            <li><a id='entrar' href='/ProjetoPacECommerce/Screens/telalogin.php'><i class='material-icons'>input</i>Entrar</a></li>
                            ";
            }
         echo"   
        </ul>
    
        <main>
            <div class='container'>";
                
                $total = 0;
                $sql = "SELECT * FROM produtos_pedido WHERE email_cliente = '$var' and prod_finalizado = '0'";
                $condicao = mysqli_query($con, $sql);
                if (mysqli_num_rows($condicao) > 0) {
                    echo "<div class='list-products2'>";
                    while ($registro = mysqli_fetch_array($condicao)) {
                        $idres = $registro['cod_prod'];
                        $qtdres = $registro['qtd_prod'];
                        $searchprod = "SELECT * FROM produtos where Prod_ID = '$idres'";
                        $condicaoProds = mysqli_query($con, $searchprod);
                        if (mysqli_num_rows($condicaoProds) > 0) {
                            while ($registroProds = mysqli_fetch_array($condicaoProds)) {
                                $precoantigo = $registroProds['Prod_Preco_Antigo'];
                                $nomeres = $registroProds['Prod_Nome'];
                                $precores = $registroProds['Prod_Preco'];
                                $imagem = $registroProds['Prod_Imagem'];
                                $subtotal = $precores * $qtdres;
                                $total += $subtotal;
                                echo "
                                    <div class='item-complete'>
                                        <div class='itens'>
                                            <div class='card card-size'>
                                                <div class='card-image'>
                                                <img src='$imagem'>
                                                </div>
                                            </div>
                                            <div class='info'>
                                                <h6><b>Nome:</b> $nomeres</h6>
                                                <h6><b>Preço:</b> R$ $precores</h6>
                                                <h6><b>Quantidade:</b> $qtdres</h6>
                                            </div>
                                            <div class='remove'>
                                                <button class='waves-effect waves-light btn-small red lighten-2'><a href='/ProjetoPacECommerce/App/remover_produto_carrinho.php?id=$idres'><i class='material-icons'>delete</i></a></button>
                                            </div>
                                        </div>
                                        <h5><b>Subtotal: </b>R$ $subtotal</h5>
                                    </div>
                                    <div class='divider'></div>";
                            }
                        }
                    }
                }
             echo"   
            </div>
        </main>
    
        <div class='container2'>
                <h4 class='total'>Total dos Itens: <b>R$ $total</b></h4>
                <button class='waves-effect waves-light btn-large dark-mode'><a href='/ProjetoPacECommerce/App/finalizar_pedido.php?preco=$total'>Finalizar a Compra</a></button>
            
        </div>";
    $var = $_SESSION['login'];
    }
    else{
        echo"Faça login primeiro arrombado";
    }
    ?>


</body>

</html>