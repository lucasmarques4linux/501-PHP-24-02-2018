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

	public function all(){
		$sql = "SELECT * FROM tb_tarefas ORDER BY id";

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

			$sql = "INSERT INTO tb_tarefas(id_usuario,descricao,status) VALUES(:id_usuario,:description,:status)";

			$stmt = $this->con->prepare($sql);

			$params = [
				':id_usuario' => $dados['id_usuario'],
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