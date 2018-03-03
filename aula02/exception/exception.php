<?php 

class NaoPodeDividirPorZeroException extends Exception{}
class ValorInfinitoException extends Exception{}

function dividir(int $a,int $b){
	
	if ($a == 0) {
		throw new ValorInfinitoException();
		
	}
	if ($b == 0 ) {
		throw new NaoPodeDividirPorZeroException();		
	}

	return $a / $b;
}

try {
	echo dividir(4,0);
}catch(NaoPodeDividirPorZeroException $e){
	echo "Dividir por zero";
	echo $e->getTraceAsString();
}catch(ValorInfinitoException $e){
	echo "Valor Infinito";
}catch (Exception $e) {
	echo "erro:";
	echo $e->getMessage();
}