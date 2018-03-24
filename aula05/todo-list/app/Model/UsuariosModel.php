<?php 

namespace Model;

use Model\DAO\UsuariosDAO;

class UsuariosModel extends UsuariosDAO
{
	protected $entity = 'Model\Entity\Usuarios';
}