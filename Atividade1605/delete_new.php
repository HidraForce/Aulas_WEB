<?php require "conexao.php"?>
<?php
$id=$_GET['id'];
$comando ="DELETE  FROM dados_dos_enderecos WHERE idEndereco=$id";
$resultado=mysqli_query($conexao,$comando);

if($resultado==true){
  echo "Endereço deletado com sucesso :)";
}else{
  echo "Infelizmente houve um erro :(";
}
?>