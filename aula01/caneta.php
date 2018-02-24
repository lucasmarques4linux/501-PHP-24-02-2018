<?php 

class Caneta
{
	// Atributos/Propriedades
	private $cor;
	private $marca;
	private $tampada = true;

	public function __construct($cor,$marca){
		$this->cor = $cor;
		$this->marca = $marca;
	}

	//Métodos
	public function escrever(string $texto){
		echo "Estou escrevendo: $texto";
	}

	public function destampar(){
		$this->tampada = false;
	}
	public function tampar(){
		$this->tampada = true;
	}
	public function getCor(){
		return $this->cor;
	}
	public function setCor($cor){
		$this->cor = $cor;
	}
	public function getMarca(){
		return $this->marca;
	}
	public function setMarca($marca){
		$this->marca = $marca;
	}
}

$azul = new Caneta("azul","BIC");
$vermelha = new Caneta("vermelha","BIC");

// $azul->setCor("azul"); 
// $azul->setMarca("BIC");

// $vermelha->setCor("vermelha");
// $vermelha->setMarca("BIC");

// $azul->tampar();
// $vermelha->destampar();
echo "<pre>";
var_dump($azul);
var_dump($vermelha);
// echo "<hr>";
// $azul->escrever("Olá Mundo");
// echo "<br>";
// $vermelha->escrever("Hello World");