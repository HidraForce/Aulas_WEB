<?php
require "conexao.php";
require "header.php";

if(isset($_GET['msg']))
    {
      $msg=$_GET['msg'];
      echo  $msg;
    }
  
$comando ="SELECT * FROM dados_dos_enderecos";
$resultado=mysqli_query($conexao,$comando);
?>
<div class="tabela">
  <h1>Dados da Tabela</h1>
  <table class="info">
    <?php while($dados = mysqli_fetch_assoc($resultado)): ?>
    <tr>
      <th>Posição</th>
      <th>Rua</th>
      <th>Exibir</th>
      <th>Deletar</th>
      <th>Modificar</th>
    </tr>
    <tr>
      <th><?= $dados["idEndereco"]; ?></th>
      <th><?= $dados["nome_Rua"]; ?></th>     
      <th><a href="selectOne.php?id=<?= $dados["idEndereco"]?>">exibir</a></th>
      <th><a href="delete_new.php?id=<?= $dados["idEndereco"]?>">Deletar</a></th>
      <th><a href="update_form.php?id=<?= $dados["idEndereco"]?>">Alterar</a></th>  
    </tr>  

    <?php endwhile ?> 
    </table>

</div>
<?php require "footer.php"; ?>