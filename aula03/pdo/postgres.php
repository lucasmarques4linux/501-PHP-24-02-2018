<?php 

require 'conexao.php';

echo "<pre>";

//$sql = "INSERT INTO usuarios(usuario,senha)VALUES('lucasm','123')";

//$dbPostgres->exec($sql);

// $sql = "SELECT * FROM usuarios";

// $result = $dbPostgres->query($sql);

// $usuarios = $result->fetchAll(PDO::FETCH_ASSOC);

// print_r($usuarios);

// try {

// 	$dbPostgres->beginTransaction();
// 	$sql = "INSERT INTO usuarios(usuario,senha)VALUES('lucascm','123')";

// 	$dbPostgres->exec($sql);


// 	$sql = "INSERT INTO usuarios(usuario,senha)VALUES('lucasccm','123')";

// 	$dbPostgres->exec($sql);


// 	$dbPostgres->commit();
	
// } catch (PDOException $e) {
// 	$dbPostgres->rollback();

// 	echo "Erro: " . $e->getMessage();
// 	// echo "Deu ruim";
// }