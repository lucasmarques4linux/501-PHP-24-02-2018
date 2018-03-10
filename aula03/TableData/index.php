<?php 

require 'autoload.php';

use Model\Usuario\Usuario;
use DAO\UsuarioDAO\UsuarioDAO;

$lucas = new Usuario('lucasmarques','123');

echo '<pre>';
var_dump($lucas);

$dao = new UsuarioDAO();
$dao->insert($lucas);

