<?php 

class Conexao
{
	private static $user = "lucas";
	private static $pass = "123";
	private static $dsn = "pgsql:host=localhost; dbname=dexterescola";

	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	public static function getInstance(){

		if (!self::$instance) {

			self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
		}
		return self::$instance;
	}
}

$a = Conexao::getInstance();
var_dump($a);
$b = Conexao::getInstance();
var_dump($b);