<?php 

namespace Model\Entity;

class Usuarios
{
	private $id;
	private $nome;
	private $email;
	private $senha;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}

	public function getSenha()
	{
	    return $this->senha;
	}
	
	public function setSenha($senha)
	{
	    return $this->senha = $senha;
	}
}