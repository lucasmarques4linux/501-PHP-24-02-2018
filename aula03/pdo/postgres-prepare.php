<?php 

require 'conexao.php';

try {
	$dbPostgres->beginTransaction();

	$dados = [
		'usuario' => 'joaosilva',
		'senha' => '123'
		];

	$sql = "INSERT INTO usuarios(usuario,senha) VALUES(:user,:pass)";

	$stmt = $dbPostgres->prepare($sql);

	$params = [
		':user' => $dados['usuario'],
		':pass' => $dados['senha']
	];

	$stmt->execute($params);
	

	// $stmt->execute($params2);

	$dbPostgres->commit();
	
} catch (PDOException $e) {
	$dbPostgres->rollback();

	echo "Erro: " . $e->getMessage();
}