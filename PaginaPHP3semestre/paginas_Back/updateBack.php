<?php
require "connection.php";

$id=$_POST["id"];
$idGra=$_POST["idGra"];
$nome=$_POST["nomeProduto"];
$desc=$_POST["desc"];
$cat=$_POST["cat"];
$preco=$_POST["preco"];
$nome_graf=$_POST["nome_graf"];
$date=$_POST["data_publ"];
$auth=$_POST["auth"];


$sql= "UPDATE produto as P, grafica as G SET P.nomeProduto='$nome', P.descricao='$desc', P.categoriaProduto='$cat', P.precoProduto='$preco', P.idGrafica= '$idGra', G.nomeGrafica='$nome_graf', G.nomeAutor='$auth', dataPublicacao='$date' where G.idGrafica =P.idGrafica and  P.idProduto = '$id'";


$saida=mysqli_query($conexao,$sql);


if($saida==true){
    header("location:../pagCRUDProd.php?Inserido_com_sucesso");
}else{
    header("location:../pagCRUDProd.php?Houve_um_erro:(");
}