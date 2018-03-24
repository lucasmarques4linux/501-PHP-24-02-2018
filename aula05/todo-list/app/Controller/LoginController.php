<?php 

namespace Controller;

use Model\UsuariosModel;
use Lib\ViewModel\ViewModel;

class LoginController
{
	private $usuariosModel;
	private $viewModel;

	public function __construct(){
		$this->usuariosModel = new UsuariosModel();
		$this->viewModel = new ViewModel();
	}
	public static function isLogado(){
		if (!$_SESSION['logado']) {
			header('Location:?r=login/login');
		}
	}
	
	public function login(){
		$this->viewModel->render('login/login');
	}
	public function logginIn(){
		$logginIn = $this->usuariosModel->login($_POST);

		if ($logginIn) {
			header('Location:?r=tarefas');		
		}

	}
	public function logout(){
		session_destroy();
		header('Location:?r=login/login');
	}
	
}