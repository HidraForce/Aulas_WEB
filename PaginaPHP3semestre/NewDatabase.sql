DROP DATABASE IF EXISTS Livraria;

CREATE DATABASE IF NOT EXISTS Livraria;

USE Livraria;

CREATE TABLE Usuarios(
  idUsuario INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeUsuario VARCHAR(255) NOT NULL,
  senhaUsuario VARCHAR(100) NOT NULL,
  emailUsuario  VARCHAR(255) NOT NULL,
  cpfUsuario VARCHAR(255) NOT NULL,
  dataNascimento DATE NOT NULL,
  sexoUsuario CHAR(1) NOT NULL,
  telefoneUsuario VARCHAR(255),
  celular VARCHAR(255) NOT NULL,

  PRIMARY KEY(idUsuario) 
  
);

CREATE TABLE IF NOT EXISTS imagens(
  idImagem INT UNSIGNED NOT NULL AUTO_INCREMENT,
  idProduto INT UNSIGNED NOT NULL ,
  img_rep VARCHAR(255) NOT NULL,

  KEY(idProduto),
  PRIMARY KEY(idImagem)
  
);

CREATE TABLE IF NOT EXISTS pedido(
  idPedido INT UNSIGNED NOT NULL AUTO_INCREMENT,
  idProduto INT UNSIGNED NOT NULL ,
  idUsuario INT UNSIGNED NOT NULL,
  totalCompra DOUBLE NOT NULL,
  KEY(idProduto),
  KEY(idUsuario),


  PRIMARY KEY(idPedido)

);

CREATE TABLE IF NOT EXISTS grafica(
  idGrafica INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeGrafica VARCHAR(255) NOT NULL,
  nomeAutor VARCHAR(255) NOT NULL,
  dataPublicacao DATE NOT NULL,

  PRIMARY KEY(idGrafica)

);

CREATE TABLE IF NOT EXISTS produto(
  idProduto INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeProduto VARCHAR(255) NOT NULL,
  descricao VARCHAR(255) NOT NULL,
  categoriaProduto VARCHAR(120) NOT NULL,
  precoProduto DECIMAL(9,2) NOT NULL,
  idGrafica INT UNSIGNED NOT NULL ,


  KEY(idGrafica),
 
  PRIMARY KEY(idProduto)

);



ALTER TABLE produto
ADD CONSTRAINT FK_idGrafica1 FOREIGN KEY(idGrafica) REFERENCES grafica(idGrafica) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE pedido
ADD CONSTRAINT FK_idProduto1 FOREIGN KEY(idProduto) REFERENCES produto(idProduto) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE pedido
ADD CONSTRAINT FK_idUsuario FOREIGN KEY(idUsuario) REFERENCES Usuarios(idUsuario) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE imagens
ADD CONSTRAINT FK_idProduto2 FOREIGN KEY(idProduto) REFERENCES produto(idProduto) ON DELETE CASCADE ON UPDATE CASCADE;


INSERT INTO Usuarios(nomeUsuario,senhaUsuario,emailUsuario,cpfUsuario,dataNascimento,sexoUsuario,telefoneUsuario,celular) VALUES('ADIMIN','485f30093135ea1c74bdec7d11badef9','a@gmail.com','a',"20001231",'a','99999', '999999');