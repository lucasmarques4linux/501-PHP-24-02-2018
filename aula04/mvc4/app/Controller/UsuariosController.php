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
		$usuarios = $this->usuariosModel->all();
		$this->viewModel->render('usuarios/index',['usuarios' => $usuarios]);
	}
	public function edit($id){
		echo "edit $id";
	}
	public function update($id){
		echo "update $id";
	}
	public function new(){
		$this->viewModel->render('usuarios/new');
	}
	public function create(){
		$this->usuariosModel->insert($_POST);
		header('Location:?r=usuarios');
	}
	public function delete($id){
		echo "delete $id";
	}
}