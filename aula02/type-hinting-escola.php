<?php 

class Aluno
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

class Turma
{
	private $curso;
	private $periodo;

	public function __construct(string $curso,string $periodo){
		$this->curso = $curso;
		$this->periodo = $periodo;
	}

	public function getCurso()
	{
	    return $this->curso;
	}
	
	public function setCurso($curso)
	{
	    return $this->curso = $curso;
	}

	public function getPeriodo()
	{
	    return $this->periodo;
	}
	
	public function setPeriodo($periodo)
	{
	    return $this->periodo = $periodo;
	}

}

class Matricula
{
	private $aluno;
	private $turma;
	private $nota1;
	private $nota2;

	public function __construct(Aluno $aluno, Turma $turma){
		$this->aluno = $aluno;
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

$lucas = new Aluno("Lucas","lucas@lucas.com");
$turma = new Turma("501","sabado");
echo $lucas->getNome();
echo "<br>";
echo $turma->getCurso();
echo "<br>";
$matriculaLucas = new Matricula($lucas,$turma);
echo $matriculaLucas->getAluno()->getNome();
echo "<br>";
echo $matriculaLucas->getTurma()->getCurso();