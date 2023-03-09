<?php 
require "paginas_Back\connection.php";
require "paginas_Back\header.php";

session_start();

$inarry  = $_SESSION["usuario"];
$usuario = $inarry["idUsuario"];

$sql="SELECT*
from(
    select im.*, row_number() over(partition by im.idProduto order by im.idImagem) rn, p.nomeProduto, p.precoProduto, p.idProduto as P_produto, PD.idProduto as PD_ID, PD.idUsuario, sum(PD.totalCompra) as total,count(PD.totalCompra) as numPedidos, PD.idPedido
    from imagens  as im join produto as p inner join pedido PD where  $usuario = PD.idUsuario =  PD.idProduto = P.idProduto = im.idProduto
)im  
where rn = 1";


$query= mysqli_query($conexao,$sql);

?>


<div class="item4">
    <div id="Dysplay_itens">
        <h1>Itens No Carrinho</h1>
        <a href="index.php">Voltar</a>
        
        <table class="customers">
            <tr>
                <th>Produtos</th>
                <th>quantidade</th>
                <th>Etotal da compra</th>


            </tr>
            <tr>
                <?php while($dados = mysqli_fetch_assoc($query)):?>
                <th>
                    <img src="<?= $dados["img_rep"]; ?>" alt="imagemProduto<?= $dados["idProduto"]; ?>" widith=45px height="150px" id="prodimg">
                    <p class="word"><?= $dados["nomeProduto"]; ?></p>

                </th>
                <th><?php $count = ($dados["numPedidos"])/4;?><p class="word">Total de Produtos:<br><?= $count?></p></th>
                <th><?php $totalReal = ($dados["total"])/4;?><p class="word">Total das compras<br><?= $totalReal?></p></th>
    
            </tr>
        <?php endwhile ?> 
        </table>
    </div>
</div>


























<?php require "paginas_Back\\footer.php";