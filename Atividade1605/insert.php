<?php

require "conexao.php";

$rua=$_POST["rua"];
$num=$_POST["num"];
$bairro=$_POST["bairro"];

$comando= "INSERT INTO dados_dos_enderecos(nome_Rua,num_Imovel,bairro) VALUES ('$rua','$num','$bairro')";

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header('Location:http://localhost:8000/select_new.php?msg=Registro inserido com sucesso!');
    exit();
}else{
    echo "Infelizmente houve um erro :(";
}


