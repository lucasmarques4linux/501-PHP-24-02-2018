<?php 

namespace DAO\UsuarioDAO;

use DAO\Conexao\Conexao;
use PDO;
use Model\Usuario\Usuario;

class UsuarioDAO
{
	private $con = null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function insert(Usuario $usuario){

		try {
			$this->con->beginTransaction();

			$sql = "INSERT INTO usuarios(usuario,senha) VALUES(:usuario,:senha)";

			$stmt = $this->con->prepare($sql);

			$stmt->bindValue(":usuario",$usuario->getUsuario());
			$stmt->bindValue(":senha",$usuario->getSenha());

			$stmt->execute();

			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			die($e->getMessage());
		}
	}
}