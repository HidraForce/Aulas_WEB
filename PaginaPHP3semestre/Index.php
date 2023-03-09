<?php
require "paginas_Back/connection.php";
// Get images from the database
$comando="SELECT*
from(
    select im.*, row_number() over(partition by im.idProduto order by im.idImagem) rn, p.nomeProduto, p.precoProduto, p.idProduto as P_produto
    from imagens  as im join produto as p where p.idProduto = im.idProduto
)im  
where rn = 1";
$resultado=mysqli_query($conexao,$comando);


session_start();
//echo session_status();
//print_r($_SESSION["usuario"]);








require "paginas_Back\header.php";
require "paginas_Back\item3.php";


?>

<!-- CONTEUDO DA PAGINA VARIA EM DIFERENTES PAGINAS -->
        <div class="item4">
            <!-- LOOP´PARA MOOSTRAR PRODUTOS NA PAGINA PRINCIPAL-->
            <?php while($dados = mysqli_fetch_assoc($resultado)):?>
              
                <!-- CAIXA PARA DYPLAY DOS PRODUTOS-->
                <div id="prodDY">
                    <!-- CAIXA DE LINK DOS PRODUTOS -->
                    <a href="pagProdutoGen.php" class="porduto">
                        <!-- IMAGEM DOS PRODUTOS -->
                        <img src="<?= $dados["img_rep"]; ?>" alt="imagemProduto<?= $dados["idProduto"]; ?>" widith=45px height="150px" id="prodimg">
                        
                        <!-- NOME E PREÇO-->
                        <p>Preço:<?= $dados["precoProduto"]; ?></p><br>
                        <p class="word"><?= $dados["nomeProduto"]; ?></p><br>


                       

                        
                    </a><br>
                    <br><span id="teste">
                            <form action="..\paginas_Back\cartBack.php" method="POST" id="cartBG">
                                <button type="submit" name="Cartbtn" id="cartBTN">Adicionar ao carrinho</button>
                                <input type="hidden" name="idPROD_CART" value="<?= $dados["idProduto"]; ?>">
                                <input type="hidden" name="prodV" value="<?= $dados["precoProduto"]; ?>">


                            </form>
                                

                        </span>
                    
                </div>
                
                                
            <?php endwhile ?> 
        </div>
        <!-- ---------------------------------------------------------------------------------------------------------- -->
        
        <!-- RODAPÉ EXEMPLAR (SEM MUITAS FUNCIONALIDADES)-->
<?php require "paginas_Back\\footer.php"?>