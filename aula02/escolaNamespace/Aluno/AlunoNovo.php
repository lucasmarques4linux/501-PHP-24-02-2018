<?php 

namespace Escola\Aluno;

class AlunoNovo
{
	private $nome;
	private $email;

	public function __construct(string $nome,string $email){
		$this->nome = $nome;
		$this->email = $email;
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
}