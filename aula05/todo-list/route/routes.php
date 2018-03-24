<?php 

$rotas = [];

$rotas['usuarios'] = 'UsuariosController@Index';
$rotas['usuarios/new'] = 'UsuariosController@New';
$rotas['usuarios/create'] = 'UsuariosController@Create';
$rotas['usuarios/edit'] = 'UsuariosController@Edit';
$rotas['usuarios/update/'] = 'UsuariosController@Update';

return $rotas;