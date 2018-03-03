<?php 

echo "<pre>";

class Aluno
{
	private $nome;
	private $nome2;

	private function getNome(){
		return $this->nome;
	}
}

$reflection = new ReflectionClass('Aluno');

print_r($reflection->getProperties());
print_r($reflection->getMethods());