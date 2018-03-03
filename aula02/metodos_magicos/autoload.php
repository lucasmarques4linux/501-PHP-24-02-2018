<?php 

function __autoload($classe){

	require_once $classe .'.php';
}

$a = new Foo();