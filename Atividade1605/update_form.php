<?php
require "header.php";

require "conexao.php";

$id=$_GET['id'];
$comando ="SELECT * FROM dados_dos_enderecos WHERE idEndereco='$id'";
$resultado=mysqli_query($conexao,$comando);

$data = mysqli_fetch_assoc($resultado);

print_r($data);

?>
  <form action="update.php" method="post">
    <label id="id">ID</label><br>
    <input type="text" name="id" value="<?= $data["idEndereco"]?>" id="id"><br>
    <label id="rua">Rua</label><br>
    <input type="text" name="rua" value="<?= $data["nome_Rua"]?>" id="rua"><br>
    <label id="nume">numero da residencia</label><br>
    <input type="text" name="num" value="<?= $data["num_Imovel"]?>" id="nume"><br>
    <label id="brr">bairro</label><br>
    <input type="text" name="bairro" value="<?= $data["bairro"]?>" id="brr"><br>
    <button>Terminar</button>
  </form>
<?php require "footer.php"?>