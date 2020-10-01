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
    $(document).ready(function() {
        $('.carousel').carousel();
    });
    $(document).ready(function() {
        $('.fixed-action-btn').floatingActionButton();
    });
    $('.carousel.carousel-slider').carousel({
        fullWidth: true
    });
</script>

<body>

    <nav class="nav-extended">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="images/logo.png" alt=""></a>

            <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                <i class="material-icons">menu</i>
            </a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Promoção</a></li>
                <li><a href="#">Lançamentos</a></li>
                <li><a href="#"><i class="dropdown-trigger material-icons" data-target='dropdown1'>person</i></a></li>
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

    <main>
        <div class="carousel carousel-slider carousel-size">
            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/900/food/1"></a>
            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/900/food/2"></a>
            <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/900/food/3"></a>
            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/900/food/4"></a>
        </div>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">whatshot</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">local_grocery_store</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">local_offer</i></a></li>
            </ul>
        </div>
    </main>

</body>

</html>