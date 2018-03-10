<?php 

$dbMysql    = new PDO("mysql:host=localhost;dbname=aula04","lucas","@da4linux");

$dbPostgres = new PDO("pgsql:host=localhost;dbname=aula04","lucas","123");

$dbMysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbPostgres->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


// var_dump($dbMysql);
// var_dump($dbPostgres);