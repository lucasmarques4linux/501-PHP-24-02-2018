<?php 

namespace Lib\FrontController;

class FrontController
{
	public function run(){
		$rota = isset($_GET['r']) ? $_GET['r'] : 'index';

		$rota = explode('/', $rota);

		$controller = isset($rota[0]) ? $rota[0] : 'index';
	
		$action = isset($rota[1]) ? $rota[1] : 'index';
		
		$_GET['id'] = isset($rota[2]) ? $rota[2] : null;
		$id = isset($rota[2]) ? $rota[2] : null;

		$controller = 'Controller\\' . ucfirst($controller . 'Controller');

		// new Controller\Index;
		$objController = new $controller();
		//obj(Index)->index;
		$objController->$action($id);
	}
}