<?php 

class Animais
{
	private $genero;
	private $cor;

	public function setCor($cor){
		$this->cor = $cor;
	}
	public function getCor(){
		return $this->cor;
	}
}

class Cachorro extends Animais
{
	
}

class Gato extends Animais
{

}

echo "<pre>";
$dog = new Cachorro();
$cat = new Gato();
// $dog->set
var_dump($dog->getCor());
var_dump($cat->genero);