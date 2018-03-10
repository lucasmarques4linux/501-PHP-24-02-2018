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

	public function all(){
		$sql = "SELECT * FROM usuarios";

		$prepare = $this->con->query($sql);
		$prepare->execute();

		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		$usuarios = [];

		foreach ($result as $item) {
			$usuarios[] = new Usuario($item['usuario'],$item['senha'],$item['id']);
		}

		return $usuarios;
	}

	public function find(int $id){
		$sql = "SELECT * FROM usuarios WHERE id = :id";

		$prepare = $this->con->prepare($sql);
		$prepare->bindValue(":id",$id);
		$prepare->execute();

		$item = $prepare->fetch(PDO::FETCH_ASSOC);

		return new Usuario($item['usuario'],$item['senha'],$item['id']);	
	}
}