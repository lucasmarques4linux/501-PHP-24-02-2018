<?php 

namespace Model\DAO;

use Lib\Db\Conexao;
use PDO;

class TarefasDAO
{
	private $con = null;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function all($id){
		$sql = "SELECT * FROM tb_tarefas WHERE id_usuario = :id_usuario  ORDER BY id ";

		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(":id_usuario",$id);
		$stmt->execute();

		$collection = [];

		while ($register = $stmt->fetchObject($this->entity)) {
			$collection[] = $register;
		}

		return $collection;
	}

	public function findWhere($where){
		// $sql = "SELECT * FROM tb_tarefas WHERE :key = :value ORDER BY id ";

		// $stmt = $this->con->prepare($sql);
		// $stmt->bindValue(":key",$where['key']);
		// $stmt->bindValue(":value",$where['value']);
		// $stmt->execute();

		$sql = "SELECT * FROM tb_tarefas WHERE {$where} ORDER BY id ";

		$stmt = $this->con->query($sql);

		$collection = [];

		while ($register = $stmt->fetchObject($this->entity)) {
			$collection[] = $register;
		}

		return $collection;
	}

	public function insert($id,array $dados){
		try {
			$this->con->beginTransaction();

			$sql = "INSERT INTO tb_tarefas(id_usuario,descricao,status) VALUES(:id_usuario,:description,:status)";

			$stmt = $this->con->prepare($sql);

			$params = [
				':id_usuario' => $id,
				':description' => $dados['descricao'],
				':status' => $dados['status']
			];

			$stmt->execute($params);

			$this->con->commit();
			
		} catch (PDOException $e) {
			$this->con->rollback();

			echo "Erro: " . $e->getMessage();
		}
	}
}