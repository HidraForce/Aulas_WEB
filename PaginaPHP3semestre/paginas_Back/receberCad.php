<?php 
require "connection.php";

$nome = $_POST["userName"];
$email = $_POST["email"];
$passwd =md5($_POST["passwd"]);
$CPF = $_POST["cpf"];
$birthD = $_POST["datNac"];
$sx = $_POST["sx"];
$tel =$_POST["telefone"];
$cel =$_POST["celular"];

$comando = "INSERT INTO Usuarios(nomeUsuario,senhaUsuario,emailUsuario,cpfUsuario, dataNascimento ,sexoUsuario,telefoneUsuario,celular) VALUES('$nome','$passwd','$email','$CPF','$birthD','$sx','$tel','$cel')";

$result=mysqli_query($conexao,$comando);



if($result == true){
    header("location:../pagLogin.php?Cadastrado_com_sucesso_faça_login_agora");
    exit();
  
}else{
    header("location:../pagLogin.php?Houve_um_erro_verifique_os_dados_inseirdos");
   
}


?>