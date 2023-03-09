<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body{
            background-color: black;

        }
        .container{
            display: flex;
            
            background-color: grey;
            margin-right:480px;
            margin-left:480px;
            height:400px;
            flex-direction: column;
            justify-content: center;
        
            



        }
        .gridit{

        }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <selection class="container">
        <form action="log_de_produto.php" method="post" class="gridit">
            <input type="text" name="titulo" placeholder="titulo"class="gridit"><br>
            <input type="text" name="descricao" placeholder="descrição"class="gridit"><br>
            <input type="number" step="any" name="preco" placeholder="preço"class="gridit"><br>
            <button class="gridit">Inserir</button>
        </form>
        <a href="mostar_produto.php" class="gridit">Ver Produtos</a>
    </selection>
</body>
</html>