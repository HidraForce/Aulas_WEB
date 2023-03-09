<?php require "header.php"?>
<?php
require "Fabricadeconexao.php";

$comando ="SELECT * FROM endereco";
$resultado=mysqli_query($conexao,$comando);
?>
<div class="tabela">
  <h1>Dados da Tabela</h1>
  <table class="info">
    <?php while($dados = mysqli_fetch_assoc($resultado)): ?>
    <tr>
      <th>Posição</th>
      <th>Rua</th>
      <th>Numero</th>
      <th>Exibir</th>
      <th>Deletar</th>
    </tr>
    <tr>
      <th><?= $dados["idAdress"]; ?></th>
      <th><?= $dados["rua"]; ?></th>
      <th><?= $dados["numerio"];?></th>
      <th><a href="selectone.php?id=<?= $dados["idAdress"]?>">exibir</a></th>
      <th><a href="delete_One.php?id=<?= $dados["idAdress"]?>">Deletar</a></th>  
    </tr>  

    <?php endwhile ?> 
    </table>

</div>



<?php require "footer.php"; ?>

 