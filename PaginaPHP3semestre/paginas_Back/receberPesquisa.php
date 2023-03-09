<?php
require "connection.php";

require "header.php";

$pesquisa=mysqli_real_escape_string($conexao,$_POST["barradepesquisa"]);


$sql="SELECT*
from(
    select im.*, row_number() over(partition by im.idProduto order by im.idImagem) rn, p.nomeProduto, p.precoProduto, p.idProduto as P_produto, p.categoriProduto
    from imagens  as im join produto as p where p.nomeProduto like '%$pesquisa%'
)im  
where rn = 1";

$query=mysqli_query($conexao,$sql);




require  "item3.php";
?>
<div class="item4">
    <div id="Dysplay_itens">
        <h1>Produtos</h1>
        <a href="../Index.php">Voltar</a>
        
        <table class="customers">
            <tr>
                <th>Produtos</th>
                <th>nome</th>
                <th>preço</th>
                <th>categoria</th>

            </tr>
            <tr>
                <?php while($dados = mysqli_fetch_assoc($query)):?>
                <th>
                    <img src="<?= $dados["img_rep"]; ?>" alt="imagemProduto<?= $dados["idProduto"]; ?>" widith=45px height="150px" id="prodimg">
                    

                </th>
                <th><a href="../pagProdutoGen.php"><p class="word"><?= $dados["nomeProduto"]; ?></p></a></th>
                <th><p class="word"><?= $dados["precoProduto"]; ?></p></th>
                <th><p class="word"><?= $dados["categoriaProduto"]; ?></p></th>  
    
            </tr>
        <?php endwhile ?> 
        </table>
    </div>







</div>

<?php require "footer.php"?>