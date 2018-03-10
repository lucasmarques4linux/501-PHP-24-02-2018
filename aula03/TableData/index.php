<?php 

require 'autoload.php';

use Model\Usuario\Usuario;
use DAO\UsuarioDAO\UsuarioDAO;

$lucas = new Usuario('lucascmarques','123');
$lucas->save();

// $lucascmarques = Usuario::find(19);
// $lucascmarques->setUsuario("lucascesarmarques");
// $lucascmarques->save();

// $lucascmarques = Usuario::find(19);
// $lucascmarques->remove();

echo '<pre>';
// var_dump($lucas);

// $dao = new UsuarioDAO();
// $dao->insert($lucas);

// print_r($dao->find(1));

// $joao = $dao->find(3);
// echo $joao->getUsuario();

// print_r(Usuario::all());
