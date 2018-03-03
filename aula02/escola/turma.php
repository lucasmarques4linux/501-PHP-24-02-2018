<?php 

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