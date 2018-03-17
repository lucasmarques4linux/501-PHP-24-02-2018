<?php 

namespace Controller;

use Model\UsuariosModel;
use Lib\ViewModel\ViewModel;

class UsuariosController
{	
	private $usuariosModel;
	private $viewModel;

	public function __construct(){
		$this->usuariosModel = new UsuariosModel();
		$this->viewModel = new ViewModel();
	}

	public function index(){
		echo "index";
	}
	public function edit($id){
		echo "edit $id";
	}
	public function update($id){
		echo "update $id";
	}
	public function new(){
		echo "new";
	}
	public function create(){
		echo "create";
	}
	public function delete($id){
		echo "delete $id";
	}
}