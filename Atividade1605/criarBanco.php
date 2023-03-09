<?php
require "conexao.php";

$comando = "CREATE DATABASE IF NOT EXISTS Endereco_novo;";

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    echo "Banco criado com sucesso :)";
}else{
    echo "Infelizmente houve um erro :(";
}

?>

