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

	public function __toString(){
		return "Eu sou um objeto";
	}
}

$a = new Foo();
echo $a;