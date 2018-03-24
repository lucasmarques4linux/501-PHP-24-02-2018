# Banco de dados

## Logando como root
### MySQL
```
sudo su
mysql
```
### PostgreSQL
```
sudo su
su postgres
psql
```

## Criando Bando de Dados
```
CREATE DATABASE tarefas;
```
## Criando Usuario
### MySQL
```
CREATE USER 'lucas'@'localhost' IDENTIFIED BY '@da4linux';
GRANT ALL PRIVILEGES ON *.* TO 'lucas'@'localhost';
```
### PostgreSQL
```
CREATE USER lucas PASSWORD '123';
```
#### Alterando o dono do banco PostgreSQL
```
ALTER DATABASE tarefas OWNER TO lucas;
```

## Saindo do usuario root
### MySQL
```
exit
exit
exit
```
### PostgreSQL
```
\q
exit
exit
exit
```

## Conectando no novo banco
### MySQL
```
mysql -u lucas -p
use tarefas;
```
### PostgreSQL
```
psql -h localhost -U lucas tarefas
```

## Criando as Tabelas no banco

### MySQL
```
CREATE TABLE tb_usuarios(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	senha VARCHAR(150) NOT NULL
);

CREATE TABLE tb_tarefas(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	id_usuario INT NOT NULL REFERENCES tb_usuarios(id),
	descricao VARCHAR(255) NOT NULL,
	status VARCHAR(50) NOT NULL
);
```

### PostgreSQL
```
CREATE TABLE tb_usuarios(
	id SERIAL PRIMARY KEY,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	senha VARCHAR(150) NOT NULL
);

CREATE TABLE tb_tarefas(
	id SERIAL PRIMARY KEY,
	id_usuario INT NOT NULL REFERENCES tb_usuarios(id),
	descricao VARCHAR(255) NOT NULL,
	status VARCHAR(50) NOT NULL
);
```

# PHP
## Instalando driver MySQL
```
sudo apt install php7.0-mysql
```
## Instalando driver PostgreSQL
```
sudo apt install php7.0-pgsql
```
## Reiniciando o apache2
```
sudo service apache2 restart
```