<?php require "header.php"?>
<?php require "Fabricadeconexao.php"?>
<?php
$id=$_GET['id'];
$comando ="DELETE  FROM endereco WHERE idAdress=$id";
$resultado=mysqli_query($conexao,$comando);

if($resultado==true){
  echo "Endereço deletado com sucesso :)";
}else{
  echo "Infelizmente houve um erro :(";
}
?>
