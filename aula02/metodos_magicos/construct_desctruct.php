<?php 

class Foo
{
	public function __construct(){
		echo "Construindo";
	}

	public function __destruct(){
		echo "Destruindo";
	}
}

$a = new Foo();
unset($a);
$b = new Foo();
$c = new Foo();