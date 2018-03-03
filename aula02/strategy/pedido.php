<?php 


interface FreteStrategy
{
	public function calcular($preco);
}

class FreteNormal implements FreteStrategy
{
	public function calcular($preco){
		return 2 + $preco;
	}
}

class FreteExpresso implements FreteStrategy
{
	public function calcular($preco){
		return 5 + $preco;
	}	
}

class FreteTurbo implements FreteStrategy
{
	public function calcular($preco){
		return 10 + $preco;
	}
}


class Pedido
{
	private $freteStrategy;
	private $preco = 0;
	public function __construct(int $preco, FreteStrategy $tipoFrete){
		$this->preco = $preco;
		$this->freteStrategy = $tipoFrete;
	}
	public function calcularTotalPedido(){
		
		return $this->freteStrategy->calcular($this->preco);
	}
}

$pedido = new Pedido(50,new FreteTurbo());
echo $pedido->calcularTotalPedido();