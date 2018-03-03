<?php 

class Matricula
{
	private $aluno;
	private $turma;
	private $nota1;
	private $nota2;

	public function __construct(Aluno $aluno, Turma $turma){
		$this->aluno = $aluno; // new Aluno()
		$this->turma = $turma;
	}

	public function getAluno()
	{
	    return $this->aluno;
	}
	
	public function setAluno(Aluno $aluno)
	{
	    return $this->aluno = $aluno;
	}

	public function getTurma()
	{
	    return $this->turma;
	}
	
	public function setTurma(Turma $turma)
	{
	    return $this->turma = $turma;
	}
}