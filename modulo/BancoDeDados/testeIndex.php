<?php
$conexao = mysqli_connect("localhost", "root","","site");
$nome=$_POST["nome"];
$email=$_POST["email"];

if($conexao == true){
    echo "funfo";
}else{
    $erroconexao = mysqli_connect_error();
    echo "erro";
}
$comando = "INSERT INTO usuario(nome,email) VALUES('$nome','$email')";

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    echo "foi";
}else{
    echo "num foi";
}