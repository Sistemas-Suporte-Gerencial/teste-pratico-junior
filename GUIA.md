Precisa-se Criar duas tabelas no postgresql. Com as seguintes especificações:

CREATE TABLE usuarios (
 	nome VARCHAR(50) NOT NULL,
	email VARCHAR(50) PRIMARY KEY,
	senha VARCHAR(50) NOT NULL
 );

 CREATE TABLE empresas (
 	nome_fantasia VARCHAR(50) NOT NULL,
	cnpj char(14) PRIMARY KEY NOT NULL,
	data_fundacao DATE NOT NULL,
	email_comercial VARCHAR(50) NULL,
	telefone  VARCHAR(30) NULL,
	cep  VARCHAR(15) NULL,
	logradouro  VARCHAR(100) NULL,
	cidade  VARCHAR(30) NULL,
	estado VARCHAR(15) NULL,
	email_usuario VARCHAR(30) NOT NULL,
	FOREIGN KEY (email_usuario) REFERENCES usuarios (email)
);

e colocar a conexão do banco no arquivo Conexao.php dentro da pasta model