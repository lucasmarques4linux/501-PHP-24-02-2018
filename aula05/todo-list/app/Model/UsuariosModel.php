<?php 

namespace Model;

use Model\Mapper\UsuariosMapper;

class UsuariosModel
{
	private $usuariosMapper;
	public function __construct(){
		$this->usuariosMapper = new UsuariosMapper();
	}

	public function login(array $dados){
		$usuario = $this->usuariosMapper->login($dados);

		if ($usuario) {
			$_SESSION['logado'] = true;
			$_SESSION['usuario'] = $usuario;
			return true;
		}
		return false;
	}

	public static function userLog(){
		return $_SESSION['usuario'];
	}

	public function all(){
		return $this->usuariosMapper->all();
	}
	public function find($id){
		return $this->usuariosMapper->find($id);
	}
	public function insert(array $dados){
		$this->usuariosMapper->insert($dados);
	}
	public function update($id, array $dados){
		$this->usuariosMapper->update($id,$dados);
	}

}