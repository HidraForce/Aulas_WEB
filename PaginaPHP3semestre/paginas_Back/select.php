<?php
require "connection.php";
require "header.php";
$id=$_GET['id'];
$comando ="SELECT * FROM produto WHERE idProduto=$id";
$resultado=mysqli_query($conexao,$comando);

$data = mysqli_fetch_assoc($resultado);





$sql="SELECT * FROM imagens WHERE idProduto=$id ";
$queryoutpuy= mysqli_query($conexao,$sql);
?>
<div class= item4>
    <div>
        <table class="customers">
            <tr>
                <th>Tipo de Info</th>
                <th>descrição</th>
            </tr>
        <?php foreach ($data as $key => $value):?>
            <tr>
                <th><?php echo $key ?></th>
                <th><?php echo $value?></th>
            </tr>
 
        <?php endforeach ?>
        </table>
        
    </div>
    <div>
        <?php while($data = mysqli_fetch_assoc($queryoutpuy)):?>
            <img src="../<?= $data["img_rep"]; ?>" alt="imagemProduto<?= $data["idProduto"]; ?>" widith=45px height="150px" id="prodimg">
         

        <?php endwhile ?>
    </div>

</div>
 <?php require "footer.php";?>
