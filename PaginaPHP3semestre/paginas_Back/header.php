<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- botões do cabeçalho -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css.css">
    <!-- -------------------------------- -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LojaTeste</title>
</head>

<body>

    <!-- FORMATAÇÃO GERAL DO SITE -->
    <div class="GridContainer">
        
        <!--CABEÇALHO ----------------------------------------------------------------------------------------------- -->
        <div class="item1">
            <!-- LOGO -->
            <img src="../IMG/logolojinha.png" alt="logo" width="240px" height="80px">
            <!-- FORMULARIO DE PESQUISA-->
            <form action="paginas_Back\receberPesquisa.php" method="post">
                <input type="text" id="srcbar" name="barradepesquisa" placeholder="Oque esta buscando? ">
                <input type="submit" class="headerbtt" name="submitHeader" value="PESQUISAR">
            </form>
            <!-- botões do cabeçalho -->
            <button onclick="location.href='pagLogin.php'" class="headerbtt"><i class="mdi mdi-account" aria-hidden="true">Login</i></button>
            <button onclick="location.href='pagCart.php'" class="headerbtt"><i class="mdi mdi-cart" aria-hidden="true">Carrinho</i></button>
        </div>
        <!-- ---------------------------------------------------------------------------------------------------------- -->
        
        
        <!-- CATEGORIAS ----------------------------------------------------------------------------------------------- -->
        <div class="item2">
            <!-- CAIXA DE LINKS DAS CATEGORIAS-->
            <div id="categoria">
                <!-- LIINKS DAS CATEGORIAS-->
                <a href="">Categoria</a>
                <a href="">Categoria</a>
                <a href="">Categoria</a>
                <a href="">Categoria</a>
            </div>

        </div>