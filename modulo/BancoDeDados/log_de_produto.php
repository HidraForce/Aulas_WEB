<?php


$conexao=$conexao = mysqli_connect("localhost", "root","","loja");
$titulo=$_POST["titulo"];
$descricao=$_POST["descricao"];
$preco=$_POST["preco"];

if($conexao == false){
    $erro = mysqli_connect_error();
    echo $erro;
};

$comando= "INSERT INTO produto(titulo,descricao,preco) VALUES('$titulo','$descricao','$preco')";

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    echo "Produto cadastrado com sucesso!";
}else{
    echo "Infelizmente houve um erro :(";
}

