<?php 

class Foo
{
	private $dados = [];

	public function __set($name,$value){
		$this->dados[$name] = $value;
	}

	public function __get($name){
		return $this->dados[$name];
	}

	private function getDados(){
		return $this->dados;
	}
}

$a = new Foo();
$a->nomeCompleto = "Lucas";
$a->idade = 24;
$a->email = "lucas@lucas";
// echo $a->email;
// print_r( $a->getDados('Lucas') );