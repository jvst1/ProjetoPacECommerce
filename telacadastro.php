<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/cadstyle.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!--mask cpf-->
    <title>ECommerce Pac2</title>
</head>

<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('select').formSelect();
    });
</script>

<body>

    <div class="content">
        <div class="container">
            <?php
            session_start();
            if (isset($_SESSION['erroCampos'])) {
                echo $_SESSION['erroCampos'];
                session_destroy();
            }
            ?>
            <form method="post" action="cad.php">
                <h3>Cadastre-se</h3>
                <label>Nome Completo*</label>
                <input type="text" name="nomecompleto" id="nomecompleto" placeholder="Nome Completo">
                <label>E-mail*</label>
                <input type="text" name="usuario" id="usuario" placeholder="Exemplo@exemplo.com.br">
                <label>CPF*</label>
                <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00');">
                <label>Número de Telefone*</label>
                <input type="text" name="telefone" id="telefone" placeholder="(00) 0 0000-0000" onkeypress="$(this).mask('(00) 0 0000-0000')">
                <h5>Dados de Endereço*</h5>
                <br>
                <label>Nome da Rua*</label>
                <input type="text" name="endereco" id="endereco" placeholder="Nome da rua">
                <label>Bairro*</label>
                <input type="text" name="bairro" id="bairro" placeholder="Bairro">
                <label>Cidade*</label>
                <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                <label>Estado*</label>
                <div class="input-field col s12">
                    <select>
                        <option value="" disabled selected>Escolha seu Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                </div>
                <label>Número de Endereço*</label>
                <input type="number" name="num" id="num" placeholder="Numero de Endereco">
                <label>CEP*</label>
                <input type="number" name="cep" id="cep" placeholder="CEP">
                <label>Senha*</label>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <label>Confirme sua Senha*</label>
                <input type="password" name="senhaconfirm" id="senhaconfirm" placeholder="Senha">
                <button type="submit" class="btn waves-effect waves-light btn-large dark-mode spacing">Cadastrar</button>
            </form>
        </div>
    </div>


</body>

</html>