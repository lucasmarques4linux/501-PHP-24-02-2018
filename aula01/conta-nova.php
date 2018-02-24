<?php 

class Conta
{
	private $titular;
	private $numConta;
	private $saldo;

	public function __construct(string $titular,int $saldo = 0){
		$this->titular = $titular;
		$this->saldo = $saldo;
		$this->gerarConta();
	}

	private function gerarConta(){
		$this->numConta = rand();
	}

	public function verSaldo(){
		return $this->saldo;
	}
	public function verTitular(){
		return $this->titular;
	}
	public function verNumConta(){
		return $this->numConta;
	}
	public function sacar(int $valor){
		$this->valor -= $valor;
	}
	public function depositar(int $valor){
		$this->valor += $valor;
	}
}

$conta = new Conta("Lucas",50);
var_dump($conta);