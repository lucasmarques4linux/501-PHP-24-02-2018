<?php 

interface Televisao
{
	public function aumentarVolume();
	public function diminuirVolume();
	public function ligar();
	public function desligar();
	public function trocarCanal($canal);
}

class Tv implements Televisao
{
	$volume = 10;
	$canal = 5;
	$estado = false;

	public function aumentarVolume(){
		++$this->volume;
	}
	public function diminuirVolume(){
		--$this->volume;
	}
	public function liga(){
		$this->estado = true;
	}
	public function desliga(){
		$this->estado = false;
	}
	public function trocarCanal($canal){
		$this->canal = $canal;
	}
}