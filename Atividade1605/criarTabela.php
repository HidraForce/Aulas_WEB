<?php
require "conexao.php";

$comando = "CREATE TABLE IF NOT EXISTS dados_dos_enderecos(
  idEndereco INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_Rua VARCHAR(200) NOT NULL,
  num_Imovel INT NOT NULL,
  bairro VARCHAR(200) NOT NULL
);";

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    echo "Tabela criada com sucesso";
}else{
    echo "Infelizmente houve um erro :(";
}

?>