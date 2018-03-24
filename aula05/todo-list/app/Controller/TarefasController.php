<?php 

namespace Controller;

use Model\TarefasModel;
use Lib\ViewModel\ViewModel;

class TarefasController
{
	private $tarefasModel;
	private $viewModel;

	public function __construct(){
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
		$this->tarefasModel($_POST);
		header('Location:?r=tarefas');
	}
	public function edit($id){
		echo 'edit' . $id;
	}
	public function update($id){
		echo 'update' . $id;
	}
}