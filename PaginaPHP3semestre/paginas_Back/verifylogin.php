<?php require "paginas_Back\connection.php";

if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION["usuario"])){
  $verfy=$_SESSION["usuario"];
   
  if($verfy["nomeUsuario"]!="ADIMIN"){
              
      header("location:../pagLogin.php?NOT_AN_ADMIN_USER");
  }   
} else {
      header('location:../pagCadProd.php');
      //print_r($_SESSION["usuario"]);                     
}

?>
