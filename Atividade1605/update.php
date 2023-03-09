<?php

require "conexao.php";

$id=$_POST['id'];
$rua=$_POST["rua"];
$num=$_POST["num"];
$bairro=$_POST["bairro"];


$comando="UPDATE dados_dos_enderecos SET  nome_rua='$rua' , num_Imovel='$num', bairro='$bairro' WHERE idEndereco='$id'";
$resultado=mysqli_query($conexao,$comando);

if($resultado == true){
  header('Location:http://localhost:8000/select_new.php?msg=Registro alterado com sucesso');
  exit();
}