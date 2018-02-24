<?php 

abstract class  Conta
{
	abstract function exibeConta();

	 final public function calc(){
		return 'bb';
	}
}

final class ContaCorrente extends Conta
{
	public function exibeConta(){}

	public function calc(){
		return 'aaa';
	}
}

class ContaPP extends Conta
{
	public function exibeConta(){}
}

// $conta = new Conta();
$contaC = new ContaCorrente();
$contaPP = new ContaPP();

echo $contaC->calc();
echo $contaPP->calc();