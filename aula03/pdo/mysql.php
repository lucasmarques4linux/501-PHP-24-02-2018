<?php 

require 'conexao.php';

echo "<pre>";

//$sql = "INSERT INTO usuarios(usuario,senha)VALUES('lucasm','123')";

//$dbMysql->exec($sql);

// $sql = "SELECT * FROM usuarios";

// $result = $dbMysql->query($sql);

// $usuarios = $result->fetchAll(PDO::FETCH_ASSOC);

// print_r($usuarios);

// try {

// 	$dbMysql->beginTransaction();
// 	$sql = "INSERT INTO usuarios(usuario,senha)VALUES('lucascm','123')";

// 	$dbMysql->exec($sql);


// 	$sql = "INSERT INTO usuarios(usuario,senha)VALUES('lucasm','123')";

// 	$dbMysql->exec($sql);


// 	$dbMysql->commit();
	
// } catch (PDOException $e) {
// 	$dbMysql->rollback();

// 	echo "Erro: " . $e->getMessage();
// }