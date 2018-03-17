<?php 

namespace Model;

use DAO\UsuariosDAO;
use DAO\PostsDAO;

class Model
{
	private $usuariosDAO;
	private $postsDAO;

	public function __construct(){
		$this->usuariosDAO = new UsuariosDAO();
		$this->postsDAO = new PostsDAO();
	}

	public function getUsuario(){
		return $this->usuariosDAO->all();
	}
	public function getPosts(){
		return $this->postsDAO->all();
	}
}