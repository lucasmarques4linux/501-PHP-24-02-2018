<?php 

namespace View;

class View
{
	public function render(string $view,array $dados){
		extract($dados);
		include '../../src/' . $view . '.php';
	}
}