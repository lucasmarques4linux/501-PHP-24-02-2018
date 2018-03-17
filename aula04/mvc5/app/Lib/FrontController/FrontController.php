<?php 

namespace Lib\FrontController;

class FrontController
{
	private $routes;
	private $routeDefault = 'usuarios';

	public function setRoutes(array $routes){
		$this->routes = $routes;
	}

	public function setRouteDefault($route){
		$this->routeDefault = $route;
	}
		
	public function run(){
		$r = isset($_GET['r']) ? $_GET['r'] : $this->routeDefault;

		if (array_key_exists($r,$this->routes)) {
			
			$route = $this->routes[$r];
			$this->callController($route);
			
		} else {
			echo "Rota Inválida";
		}
	}

	private function callController($route){
		$route = explode('@', $route);
		$controller = $route[0];
		$action = $route[1];
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$controller = 'Controller\\' . $controller;

		$objController = new $controller();
	
		$objController->$action($id);
	}

}