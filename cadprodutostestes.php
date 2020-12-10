<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/info_produto_style.css">
    <link rel="stylesheet" href="css/global.css">
    <title>Document</title>
</head>

<body>
    <div class='spacing'>
        <div class='card card-size'>
            <div class='card-image'>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="imagem" id="imagem" onchange="previewImagem()">
                    <img>
                </form>
            </div>
        </div>

        <div class='flex-column'>
            <div class='addcart'>
                <label>
                    <h4>Nome Produto*</h4>
                </label>
                <input type="text" name="nomeproduto" id="nomeproduto" placeholder="Nome do Produto">

                <div class='card-content'>
                    <label>
                        <h4>Preço Produto*</h4>
                    </label>
                    <input type="text" name="preco" id="preco" placeholder="Preco do Produto">
                </div>


                <div class='input-field col s6'>
                    <input id='quantity' type='text' class='validate'>
                    <label for='quantity'>Quantidade</label>
                </div>
            </div>
            <br>
            <hr>
            <h4>Descrição</h4>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        </div>
    </div>"

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function previewImagem() {
            var imagem = document.querySelector('input[name=imagem]').files[0];
            var preview = document.querySelector('img');

            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }
            if (imagem) {
                reader.readAsDataURL(imagem);
            } else {
                preview.src = "";
            }
        }
    </script>
</body>

</html>