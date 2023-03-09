<?php
require "connection.php";

$id=$_GET['id'];
$comando ="DELETE p.*,i.*,g.* FROM produto as p  INNER JOIN imagens as i INNER JOIN grafica as g where g.idGrafica =p.idGrafica and  p.idProduto = '$id'";
$resultado=mysqli_query($conexao,$comando);

if($resultado==true){
  header("location:../pagCRUDProd.php?Removido_com_sucesso");
  //echo $resultado;
}else{
    header("location:../pagCRUDProd.php?houve_um_erro");
}
?>
