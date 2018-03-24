<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
<?php if (isset($_SESSION['logado'])) : ?>
	<div class="container">
			<div class="collapse navbar-collapse">
		  		<ul class="nav navbar-nav">
			  		<li><a href="?r=tarefas">Todas Tarefas</a></li>
			  		<li><a href="?r=tarefas&id=todo">à Fazer</a></li>
			  		<li><a href="?r=tarefas&id=wip">Fazendo</a></li>
			   		<li><a href="?r=tarefas&id=done">Feito</a></li> 
			    </ul>
			    <ul class="nav navbar-nav pull-right">
			    	<li><a href="?r=login/logout">LOGOUT</a></li>
			    </ul>
		  </div>
	</div>
<?php endif; ?>
</nav>

<div class="container">
<?php if (isset($_SESSION['logado'])) : ?>
<div class="page-header">
	<h3>Olá,<?=$_SESSION['usuario']->getNome() ?></h3>
</div>
<?php endif; ?>