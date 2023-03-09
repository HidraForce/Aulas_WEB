<?php require "header.php";?>
<?php
require "Fabricadeconexao.php";
$id=$_GET['id'];
$comando ="SELECT * FROM endereco WHERE idAdress=$id";
$resultado=mysqli_query($conexao,$comando);

$data = mysqli_fetch_assoc($resultado);
?>
<table>
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



