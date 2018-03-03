<?php 

class Aluno
{
	public $nome;

	public function __clone(){
		echo "Estou clonando";
	}
}

$lucas = new Aluno();
$lucas->nome = "Lucas";
echo $lucas->nome;

$joao = clone $lucas;

echo $joao->nome;

$joao->nome = "João";

echo $joao->nome;
echo $lucas->nome;