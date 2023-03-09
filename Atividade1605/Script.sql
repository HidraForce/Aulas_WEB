CREATE DATABASE IF NOT EXISTS Endereco_novo;
USE Endereco_novo;
CREATE TABLE IF NOT EXISTS dados_dos_enderecos(
  idEndereco INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome_Rua VARCHAR(200) NOT NULL,
  num_Imovel INT NOT NULL,
  bairro VARCHAR(200) NOT NULL,
  img VARCHAR()
);