<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <li><a href="#"><i class="material-icons">person</i>Entrar</a></li>
    </ul>

</body>

</html>