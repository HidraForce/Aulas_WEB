<?php 
require "paginas_Back\header.php";
require "paginas_Back\connection.php";
$comando="SELECT*
from(
    select im.*, row_number() over(partition by im.idProduto order by im.idImagem) rn, p.nomeProduto, p.precoProduto, p.idProduto as P_produto
    from imagens  as im join produto as p where p.idProduto = im.idProduto
)im  
where rn = 1";
$resultado=mysqli_query($conexao,$comando);


?>

<div class="item4">

    <div id="Dysplay_itens">
        <h1>Produtos</h1>
        <a href="../pagCadProd.php">Voltar</a>
        
        <table class="customers">
            <tr>
                <th>Produtos</th>
                <th>Exibir</th>
                <th>Excluir</th>
                <th>Editar</th>

            </tr>
            <tr>
                <?php while($dados = mysqli_fetch_assoc($resultado)):?>
                <th>
                    <img src="<?= $dados["img_rep"]; ?>" alt="imagemProduto<?= $dados["idProduto"]; ?>" widith=45px height="150px" id="prodimg">
                    <p class="word"><?= $dados["nomeProduto"]; ?></p>

                </th>
                <th><a href="paginas_Back\select.php?id=<?= $dados["P_produto"]?>">exibir</a></th>
                <th><a href="paginas_Back\delete.php?id=<?= $dados["P_produto"]?>">Deletar</a></th>
                <th><a href="updateFornt.php?id=<?= $dados["P_produto"]?>">Editar</a></th>  
    
            </tr>
        <?php endwhile ?> 
        </table>
    </div>

</div>
<?php require "paginas_Back\\footer.php";?>