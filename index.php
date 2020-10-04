<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ECommerce Pac2</title>
</head>

<script>
    $(function() {
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
    });
</script>

<body>

    <nav class="nav-extended">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">ECommerce</a>

            <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                <i class="material-icons">menu</i>
            </a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Promoção</a></li>
                <li><a href="#">Lançamentos</a></li>
                <li><a class='dropdown-trigger' href='#'><i class="dropdown-trigger material-icons">person</i></a></li>
                <li><a class='dropdown-trigger' href='#'><i class="dropdown-trigger material-icons">local_grocery_store</i></a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="#"><i class="material-icons">local_grocery_store</i>Produtos</a></li>
        <li><a href="#"><i class="material-icons">local_offer</i>Promocoes</a></li>
        <li><a href="#"><i class="material-icons">whatshot</i>Lançamentos</a></li>
        <li><a href="#"><i class="material-icons">search</i>Pesquisa</a></li>
    </ul>

    <main>

        <section class="landing-page">

        </section>

        <h2>Promoções da Semana</h2>
        <div class="list-products">
            <div class="card spacing">
                <div class="card-image">
                    <img src="https://picsum.photos/600">
                    <span class="card-title">Produto Teste</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light dark-mode"><i class="material-icons">local_grocery_store</i></a>
                </div>
                <div class="card-content">
                    <p class="discount">R$ 250,99</p>
                    <h5>Por: 199,99</h5>
                </div>
            </div>
            <div class="card spacing">
                <div class="card-image">
                    <img src="https://picsum.photos/600">
                    <span class="card-title">Produto Teste</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light dark-mode"><i class="material-icons">local_grocery_store</i></a>
                </div>
                <div class="card-content">
                    <p class="discount">R$ 250,99</p>
                    <h5>Por: 199,99</h5>
                </div>
            </div>
            <div class="card spacing">
                <div class="card-image">
                    <img src="https://picsum.photos/600">
                    <span class="card-title">Produto Teste</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light dark-mode"><i class="material-icons">local_grocery_store</i></a>
                </div>
                <div class="card-content">
                    <p class="discount">R$ 250,99</p>
                    <h5>Por: 199,99</h5>
                </div>
            </div>
            <div class="card spacing">
                <div class="card-image">
                    <img src="https://picsum.photos/600">
                    <span class="card-title">Produto Teste</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light dark-mode"><i class="material-icons">local_grocery_store</i></a>
                </div>
                <div class="card-content">
                    <p class="discount">De: R$ 250,99</p>
                    <h5>Por: 199,99</h5>
                </div>
            </div>
        </div>

        </div>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large dark-mode">
                <i class="large material-icons">whatshot</i>
            </a>
            <ul>
                <li><a class="btn-floating dark-mode"><i class="material-icons">local_grocery_store</i></a></li>
                <li><a class="btn-floating dark-mode darken-1"><i class="material-icons">local_offer</i></a></li>
            </ul>
        </div>
    </main>

    <footer class="page-footer dark-mode">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Contate a loja através do e-mail</h5>
                    <p class="grey-text text-lighten-4">suporte@gmail.com</p>
                    <form action="#">
                        <br>
                        <textarea name="message" rows="10" cols="30" placeholder="Informe sua mensagem aqui"></textarea>
                        <br><br>
                        <input class="btn light-mode btn-hover" type="submit" />
                    </form>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h4 class="white-text">Desenvolvedores</h4>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Frederico Stein</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gustavo Bosco</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Matheus Tambosi</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">João Tomio</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">João Belli</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Vitor Adriel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Senaizada ECommerce
            </div>
        </div>
    </footer>

</body>

</html>