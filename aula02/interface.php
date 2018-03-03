<?php 

interface ContaInterface
{
	public function sacar();
	public function depositar();
	public function verSaldo();
}

class ContaCorrente implements ContaInterface{

	public function sacar(){}
	public function depositar(){}
	public function verSaldo(){}
}