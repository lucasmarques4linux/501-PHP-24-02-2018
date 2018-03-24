<?php 

namespace Controller;

use Model\TarefasModel;
use Lib\ViewModel\ViewModel;
use Controller\LoginController;

class TarefasController
{
	private $tarefasModel;
	private $viewModel;

	public function __construct(){
		LoginController::isLogado();
		$this->tarefasModel = new TarefasModel();
		$this->viewModel = new ViewModel();
	}
	public function index(){

		$tarefas = $this->tarefasModel->all();
		$this->viewModel->render('tarefas/index',
			['tarefas' => $tarefas]);
	}
	public function new(){
		$this->viewModel->render('tarefas/new');	
	}
	public function create(){
		print_r($_POST);
		$this->tarefasModel->insert($_POST);
		header('Location:?r=tarefas');
	}
	public function edit($id){
		echo 'edit' . $id;
	}
	public function update($id){
		echo 'update' . $id;
	}
}