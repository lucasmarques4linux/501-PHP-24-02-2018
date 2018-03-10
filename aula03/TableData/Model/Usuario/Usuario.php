<?php 

namespace Model\Usuario;

use DAO\UsuarioDAO\UsuarioDAO;

class Usuario
{
	private $usuario;
	private $senha;
	private $id;

	public function __construct($usuario,$senha,$id=null){
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->id = $id;
	}

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getUsuario()
	{
	    return $this->usuario;
	}
	
	public function setUsuario($usuario)
	{
	    return $this->usuario = $usuario;
	}

	public function getSenha()
	{
	    return $this->senha;
	}
	
	public function setSenha($senha)
	{
	    return $this->senha = $senha;
	}

	public static function all(){
		$dao = new UsuarioDAO();
		return $dao->all();
	}

	public static function find(int $id){
		$dao = new UsuarioDAO();
		return $dao->find($id);
	}

	public static function save(){

	}

	public static function remove(){

	}
}