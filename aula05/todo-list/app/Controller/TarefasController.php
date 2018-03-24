<?php 

namespace Controller;

use Model\TarefasModel;
use Model\UsuariosModel;
use Model\Entity\Tarefas;
use Lib\ViewModel\ViewModel;


class TarefasController
{
	private $tarefasModel;
	private $viewModel;
	private $id_usuario;

	public function __construct(){
		LoginController::isLogado();
		$this->tarefasModel = new TarefasModel();
		$this->viewModel = new ViewModel();
		$this->id_usuario = UsuariosModel::userLog()->getId();
	}
	public function index($id){
		
		if (!$id) {
			$tarefas = $this->tarefasModel->all($this->id_usuario);	
		} else {
			$where = "status='$id' AND id_usuario = '$this->id_usuario'";
			$tarefas = $this->tarefasModel->findWhere($where);
		}
		
		$this->viewModel->render('tarefas/index',
			['tarefas' => $tarefas]);
	}
	public function new(){
		$status = Tarefas::status();
		$this->viewModel->render('tarefas/new',
			['status' => $status]);	
	}
	public function create(){
		$this->tarefasModel->insert($this->id_usuario,$_POST);
		header('Location:?r=tarefas');
	}
	public function edit($id){
		echo 'edit' . $id;
	}
	public function update($id){
		echo 'update' . $id;
	}
}