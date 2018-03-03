<?php 

class Caneta
{
	public static $tamanho = 10;
	private $cor;

	public function __construct($cor){
		$this->cor = $cor;
	}

	public function getCor(){
		return $this->cor;
	}

	public function getTamanho(){
		return self::$tamanho;
	}
}

// echo Caneta::$tamanho;
$azul = new Caneta('azul');
$preta = new Caneta('preta');
echo $azul->getTamanho();
echo "<br>";
Caneta::$tamanho = 50;
echo $preta->getTamanho();
echo "<br>";
echo $azul->getTamanho();