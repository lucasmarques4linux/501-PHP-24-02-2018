<?php 

class Calc
{
	// Não permitir número negativos
	// Não pertitir resultado maior que 50
	public static function soma($a,$b){
		return $a + $b;
	}
	// Não permitir resultado menor que zero
	public static function subt($a,$b){
		return $a - $b;
	}
	// Não permitir divisão por zero
	// Não permitir valor Infinito $a == 0
	public static function divi($a,$b){
		return $a / $b;
	}
	// Não permitir multiplicação por zero
	// Não permitir resultado maior que 50
	public static function mult($a,$b){
		return $a * $b;
	}
}

echo Calc::soma(4,2);
echo "<br>";
echo Calc::subt(4,2);
echo "<br>";
echo Calc::divi(4,2);
echo "<br>";
echo Calc::mult(4,2);
echo "<br>";