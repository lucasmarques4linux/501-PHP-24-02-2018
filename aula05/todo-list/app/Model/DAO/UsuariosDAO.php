<?php 

namespace Model\DAO;

use Lib\Db\Conexao;
use PDO;

class UsuariosDAO
{
	private $con = null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function all(){
		$sql = "SELECT * FROM tb_usuarios ORDER BY id";

		$stmt = $this->con->query($sql);

		$colection = [];

		while ($register = $stmt->fetchObject($this->entity)) {
			$colection[] = $register;
		}

		return $colection;
	}

	public function insert(array $dados){
		try {
			$this->con->beginTransaction();

			$sql = "INSERT INTO tb_usuarios(nome,email,senha) VALUES(:name,:email,:pass)";

			$stmt = $this->con->prepare($sql);

			$params = [
				':name' => $dados['nome'],
				':email' => $dados['email'],
				':pass' => $dados['senha']
			];

			$stmt->execute($params);

			$this->con->commit();
			
		} catch (PDOException $e) {
			$this->con->rollback();

			echo "Erro: " . $e->getMessage();
		}
	}

	public function find($id){
		$sql = "SELECT * FROM tb_usuarios WHERE id = :id";

		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();

		$register = $stmt->fetchObject($this->entity);

		return $register;	
	}

	public function update($id,$dados){
		try {
			$this->con->beginTransaction();

			$sql = "UPDATE tb_usuarios SET nome=:name,email=:email WHERE id=:id";

			$stmt = $this->con->prepare($sql);

			$stmt->bindValue(":name",$dados['nome']);
			$stmt->bindValue(":email",$dados['email']);
			$stmt->bindValue(":id",$id);

			$stmt->execute();

			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			die($e->getMessage());
		}
	}

	public function login(array $dados){
		$sql = "SELECT * FROM tb_usuarios WHERE email = :email AND senha = :senha";
	
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":email",$dados['email']);
		$stmt->bindValue(":senha",$dados['senha']);
		$stmt->execute();

		$register = $stmt->fetchObject($this->entity);

		return $register;
	}
}