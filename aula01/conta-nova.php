<?php 

class Conta
{
	private $titular; // Nome
	private $numConta;// Número
	private $saldo;	  // Saldo
	private $tipo;	  // Tipo, CC ou CP
	private $status;  // False = fechada, True = aberta

	public function __construct(string $titular,string $tipo){

		$this->abrirConta($titular,$tipo);
	}

	public function getStatus(){
		return $this->status;
	}
	public function setStatus($status){
		$this->status = $status;
	}

	public function getTitular(){
		return $this->titular;
	}
	public function setTitular($nome){
		$this->titular = $nome;
	}

	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}


	private function gerarNumConta(){
		$this->numConta = rand();
	}

	public function abrirConta(string $titular, string $tipo){

		$this->setTitular($titular);
		$this->gerarNumConta();
		$this->setStatus(true);
		$this->status = true;

		if ('CC' === $tipo) {
			$this->setTipo($tipo);
			$this->depositar(50);
		} else if ('CP' === $tipo){
			$this->setTipo($tipo);
			$this->depositar(100);
		} else {
			echo "Tipo Inválido <br>";
		}
	}

	public function fecharConta(){
		if ($this->getStatus()) {

			if ($this->verSaldo() > 0) {
				echo "Você precisa sacar todo o dinheiro <br>";
			} else if ($this->verSaldo() < 0){
				echo "Você tem que sanar suas dívidas <br>";
			} else {
				$this->setStatus(false);		
			}

		} else {
			echo "Conta já está Fechada <br>";
		}
		
	}

	public function verSaldo(){
		if ($this->getStatus()) {
			return $this->saldo;	
		} else {
			return "Conta Fechada <br>";
		}
		
	}
	public function verTitular(){
		return $this->titular;
	}
	public function verNumConta(){
		return $this->numConta;
	}
	public function sacar(int $valor){
		if ($this->verSaldo() >= $valor) {
			$this->saldo -= $valor;
		} else {
			echo "Saldo Insuficiente <br>";
		}
	}
	public function depositar(int $valor){
		if ($this->getStatus()) {
			$this->saldo += $valor;	
		} else {
			echo "Conta Fechada <br>";
		}
		
	}
}

echo "<pre>";
$conta = new Conta("Lucas",'CC');
echo "Titular: {$conta->verTitular()} <br>";
echo "numConta: {$conta->verNumConta()} <br>";
$conta->depositar(300);
echo "Saldo: {$conta->verSaldo()} <br>";
$conta->sacar(400);
$conta->fecharConta();
$conta->sacar(350);
$conta->fecharConta();
var_dump($conta);