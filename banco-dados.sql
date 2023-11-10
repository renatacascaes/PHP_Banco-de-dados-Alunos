create database db_estacionamento;
CREATE TABLE cliente (
  codCliente int(11) AUTO_INCREMENT,
  nome varchar(100) ,
  email varchar(100) ,
  dataNascimento date ,
  senha varchar(20) ,
  PRIMARY KEY (codCliente)
) ;
