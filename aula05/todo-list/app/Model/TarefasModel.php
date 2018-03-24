<?php 

namespace Model;

use Model\DAO\TarefasDAO;

class TarefasModel extends TarefasDAO
{
	protected $entity = 'Model\Entity\Tarefas';
}