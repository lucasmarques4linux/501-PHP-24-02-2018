<?php 

require 'conexao.php';

try {
	$dbMysql->beginTransaction();

	$dados = [
		'usuario' => 'joaosilva',
		'senha' => '123'
		];

	$sql = "INSERT INTO usuarios(usuario,senha) VALUES(:user,:pass)";

	$stmt = $dbMysql->prepare($sql);

	$stmt->bindParam(":user",$dados['usuario']);
	$stmt->bindParam(":pass",$dados['senha']);

	$stmt->execute();

	$dbMysql->commit();
	
} catch (PDOException $e) {
	$dbMysql->rollback();

	echo "Erro: " . $e->getMessage();
}