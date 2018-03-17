<?php 

namespace View;

class View
{
	public function render(array $dados){
		extract($dados);
		include 'src/hello.php';
	}
}