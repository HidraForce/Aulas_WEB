<?php
require "connection.php";

if(!isset($_SESSION)){
    header("location:../pagLogin.php");

}else{
    session_start();
    if(isset($_POST["Cartbtn"])){
        $idToAdd=mysqli_real_escape_string($conexao,$_POST["idPROD_CART"]);
        $preco=$_POST["prodV"];
        if(isset($_SESSION["usuario"])){
            $TREX=$_SESSION["usuario"];
            $GUIGA=$TREX["idUsuario"];

            $sql="INSERT INTO pedido(idProduto,idUsuario,totalCompra) VALUE('$idToAdd','$GUIGA','$preco')";
            $resultado=mysqli_query($conexao,$sql);

            if($resultado==true){
            header("location:../index.php?Inserido_no_carrinho_com_sucesso");
        
            }else{
            header("location:../index.php?houve_um_erro:(");
        }
    }
}

}
