<?php
$conexao= mysqli_connect("localhost", "root","","registros");
if($conexao == false){
  $erro = mysqli_connect_error();
  echo $erro;
};