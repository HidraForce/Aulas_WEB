<?php
require "Fabricadeconexao.php";

$adress=$_POST["adress"];
$numero=$_POST["numero"];
$comp=$_POST["complemeto"];
$bairro=$_POST["bairro"];
$cep=$_POST["cep"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$pais=$_POST["pais"];


$comando= "INSERT INTO endereco(rua,bairro,cidade,pais,numerio,complemento,cep,estado) VALUES('$adress','$bairro','$cidade','$pais','$numero','$comp','$cep','$estado')";

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    echo "Endereço cadastrado com sucesso :)";
}else{
    echo "Infelizmente houve um erro :(";
}
