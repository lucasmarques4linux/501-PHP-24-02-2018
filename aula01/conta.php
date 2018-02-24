<?php 
// Criar uma classe chamada Conta
// Ela deve ter dois atributos
//	numConta
//	saldo
// Você deve atribuir valores para esses atributos
// Mostrar na tela a seguinte mensagem
// Saldo atual da conta 'x' é 'x';
// Criar dois métodos sacar(valor) e depositar(valor);
// Estou sacando X;
// Estou depositando Y;
// Alterar os métodos para que eles alterem o valor do atributo saldo;
// Exibir o Saldo atualizado
// Criar função verSaldo que retorne o saldo


class Conta
{
	public $numConta;
	private $saldo = 0;

	public function sacar(int $valor){
		$this->saldo -= $valor;
	}

	public function depositar(int $valor){
		$this->saldo += $valor;
	}

	public function verSaldo(){
		return $this->saldo;
	}

}

$conta = new Conta();
$conta->numConta = '123-4';
$conta->depositar(1000);
$conta->sacar(100);
$conta->depositar(200);
echo "Saldo atual da conta $conta->numConta é: " . $conta->verSaldo();
echo "<hr>";