<?php
$conexao = mysqli_connect("localhost", "root","","site");

$titulo=$_POST["titulo"];
$descricao=$_POST["descricao"];
$preco=$_POST["preco"];

if($conexao != true){
    $erroconexao = mysqli_connect_error();
    echo "erro";

}
$comando = "INSERT INTO produto(titulo,descricao,preco) VALUES('$titulo','$descricao','$preco')";

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    echo "foi";
}else{
    echo "num foi";
}
