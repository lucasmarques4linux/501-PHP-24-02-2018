<?php 

class Conta
{
	private $titular;
	private $numConta;
	private $saldo;

	public function __construct(string $nome,int $saldo){
		$this->titular = $nome;
		$this->saldo = $saldo;
		$this->gerarNumConta();
	}

	public function getTitular()
	{
	    return $this->titular;
	}
	
	public function setTitular($titular)
	{
	    return $this->titular = $titular;
	}

	public function getNumConta()
	{
	    return $this->numConta;
	}
	
	public function setNumConta($numConta)
	{
	    return $this->numConta = $numConta;
	}

	public function getSaldo()
	{
	    return $this->saldo;
	}
	
	public function setSaldo($saldo)
	{
	    return $this->saldo = $saldo;
	}

}

class ContaCorrente extends Conta
{
	private $chequeEspecial = false;

	public function getChequeEspecial()
	{
	    return $this->chequeEspecial;
	}
	
	public function setChequeEspecial($chequeEspecial)
	{
	    return $this->chequeEspecial = $chequeEspecial;
	}

	public function depositar(int $valor){
		$this->setSaldo($this->getSaldo() + ($valor - ($valor * 0.02)));
	}

	public function sacar(int $valor){
		$this->setSaldo($this->getSaldo() - ($valor + ($valor * 0.02)));
	}

	public function gerarNumConta(){
		$this->setNumConta('cc:' . rand(100,999));
	}
}

class ContaPoupanca extends Conta
{
	public function depositar(int $valor){
		$this->setSaldo($this->getSaldo() + $valor);
	}
	public function sacar(int $valor){
		$this->setSaldo($this->getSaldo() - $valor);
	}
	public function gerarNumConta(){
		$this->setNumConta('cp:' . rand(100,999));
	}
}

echo "<pre>";
$cp = new ContaPoupanca("Lucas", 100);
$cc = new ContaCorrente("Zend", 100);

echo "Conta: {$cc->getNumConta()} | Saldo: {$cc->getSaldo()} <br>";
echo "Conta: {$cp->getNumConta()} | Saldo: {$cp->getSaldo()} <br>";
echo "<hr>Depositando 100 reais <br>";
$cp->depositar(100);
$cc->depositar(100);
echo "Conta: {$cc->getNumConta()} | Saldo: {$cc->getSaldo()} <br>";
echo "Conta: {$cp->getNumConta()} | Saldo: {$cp->getSaldo()} <br>";
echo "<hr>Sacando 50 reais <br>";
$cp->sacar(50);
$cc->sacar(50);
echo "Conta: {$cc->getNumConta()} | Saldo: {$cc->getSaldo()} <br>";
echo "Conta: {$cp->getNumConta()} | Saldo: {$cp->getSaldo()} <br>";