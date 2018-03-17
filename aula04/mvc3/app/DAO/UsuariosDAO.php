<?php 

namespace DAO;

use Conexao;

class UsuarioDAO
{
	private $con = null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function all(){
		$sql = "SELECT * FROM usuarios";

		$stmt = $this->con->query($sql);
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}
}