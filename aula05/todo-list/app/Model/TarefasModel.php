<?php 

namespace Model;

use Model\Mapper\TarefasMapper;
use Model\UsuariosModel;

class TarefasModel
{
	private $tarefasMapper;
	private $usuariosModel;
	public function __construct(){
		$this->tarefasMapper = new TarefasMapper();
		$this->usuariosModel = new UsuariosModel();
	}

	public function all(){
		$id = $this->usuariosModel->userLogged()->getId();
		return $this->tarefasMapper->all($id);
	}
	public function find($id){
		return $this->tarefasMapper->find($id);
	}
	public function insert(array $dados){
		$this->tarefasMapper->insert($dados);
	}
	public function update($id, array $dados){
		$this->tarefasMapper->update($id,$dados);
	}
}