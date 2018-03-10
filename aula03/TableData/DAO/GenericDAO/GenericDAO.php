<?php 

namespace DAO\GenericDAO;

use PDO;
use DAO\Conexao\Conexao;

class GenericDAO
{
	private $con = null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function insert(string $tabela,array $dados){
		foreach ($dados as $campo => $valor) {
			$campos[] = $campo;
			$valores[] =$valor;
		}

		$campos = implode(",", $campos);
		$valores = implode(",",$valores);
		$sql = "INSERT INTO $tabela($campos) VALUES($valores)";

		echo $sql;
		die();
	}
}
