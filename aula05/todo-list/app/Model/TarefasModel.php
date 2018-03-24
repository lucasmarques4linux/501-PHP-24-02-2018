<?php 

namespace Model;

use Model\Mapper\TarefasMapper;

class TarefasModel
{
	private $tarefasMapper;
	private $usuariosModel;
	public function __construct(){
		$this->tarefasMapper = new TarefasMapper();
		$this->usuariosModel = new UsuariosModel();
	}

	public function all($id){
		return $this->tarefasMapper->all($id);
	}
	public function insert($id,array $dados){
		$this->tarefasMapper->insert($id, $dados);
	}
	public function update($id, array $dados){
		$this->tarefasMapper->update($id,$dados);
	}

	public function findWhere($where){
		return $this->tarefasMapper->findWhere($where);
	}
}