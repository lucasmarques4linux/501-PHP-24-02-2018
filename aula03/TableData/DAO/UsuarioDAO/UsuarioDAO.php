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

		$stmt = $this->con->query($sql);
		$stmt->execute();

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$usuarios = [];

		foreach ($result as $item) {
			$usuarios[] = new Usuario($item['usuario'],$item['senha'],$item['id']);
		}

		return $usuarios;
	}

	public function find(int $id){
		$sql = "SELECT * FROM usuarios WHERE id = :id";

		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();

		$item = $stmt->fetch(PDO::FETCH_ASSOC);

		return new Usuario($item['usuario'],$item['senha'],$item['id']);	
	}

	public function update(Usuario $usuario){
		try {
			$this->con->beginTransaction();

			$sql = "UPDATE usuarios SET usuario=:usuario,senha=:senha WHERE id=:id";

			$stmt = $this->con->prepare($sql);

			$stmt->bindValue(":usuario",$usuario->getUsuario());
			$stmt->bindValue(":senha",$usuario->getSenha());
			$stmt->bindValue(":id",$usuario->getId());

			$stmt->execute();

			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			die($e->getMessage());
		}
	}
	public function delete(Usuario $usuario){
		try {
			$this->con->beginTransaction();

			$sql = "DELETE FROM usuarios WHERE id = :id";

			$stmt = $this->con->prepare($sql);
			$stmt->bindValue(":id", $usuario->getId());

			$stmt->execute();

			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			die($e->getMessage());
		}
	}
	public function delete2(int $id){
		try {
			$this->con->beginTransaction();

			$sql = "DELETE FROM usuarios WHERE id = :id";

			$stmt = $this->con->prepare($sql);
			$stmt->bindValue(":id", $id);

			$stmt->execute();
			
			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			die($e->getMessage());
		}
	}
}