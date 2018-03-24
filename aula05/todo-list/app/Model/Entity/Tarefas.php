<?php 

namespace Model\Entity;

class Tarefas
{
	private $id;
	private $id_usuario;
	private $descricao;
	private $status;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getId_usuario()
	{
	    return $this->id_usuario;
	}
	
	public function setId_usuario($id_usuario)
	{
	    return $this->id_usuario = $id_usuario;
	}

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
	    return $this->descricao = $descricao;
	}

	public function getStatus()
	{
		if (array_key_exists($this->status, self::status())) {
		    	return self::status()[$this->status];			
				// $status = self::status();
				// return $status[$this->status];
		    }    
	}
	
	public function setStatus($status)
	{
	    return $this->status = $status;
	}

	public static function status(){
		$status = [
			'todo' => 'À Fazer',
			'wip'  => 'Fazendo',
			'done' => 'Feito',
			'backlog' => 'Proxima Semana'
		];

		return $status;
	}
}