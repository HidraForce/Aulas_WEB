CREATE IF NOT EXISTIS registros;

USE registros;

CREATE TABLE endereco(
  idAdress INT UNSIGNED NOT NULL AUTO_INCREMENT,
  rua VARCHAR(200) NOT NULL,
  bairro VARCHAR(120) NOT NULL,
  cidade VARCHAR(70) NOT NULL,
  pais VARCHAR(70) NOT NULL,
  numerio INT NOT NULL,
  complemento VARCHAR(11) DEFAULT NULL,
  cep INT NOT NULL,
  estado VARCHAR(120) NOT NULL,
  PRIMARY KEY(idAdress)
);