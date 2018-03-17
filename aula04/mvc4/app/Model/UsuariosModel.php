<?php 

namespace Model;

use DAO\UsuariosDAO;

class UsuariosModel
{
	private $usuariosDAO;

	public function __construct(){
		$this->usuariosDAO = new UsuariosDAO();
	}

	public function all(){
		return $this->usuariosDAO->all();
	}
	public function insert(array $dados){
		$this->usuariosDAO->insert($dados);
	}
}