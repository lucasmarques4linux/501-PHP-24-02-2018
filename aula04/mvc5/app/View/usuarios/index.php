<h2>Lista de Usuários</h2>
<ul>
<?php foreach ($usuarios as $usuario): ?>
	<li>
		<strong>ID: </strong><?= $usuario['id']?> || <strong>Usuário: </strong><?= $usuario['usuario']?> ||
		<a href="?r=usuarios/edit&id=<?= $usuario['id']?>">Editar</a> ||
		<a href="?r=usuarios/delete">Excluir</a>
	</li>
<?php endforeach; ?>
</ul>

<a href="?r=usuarios/new">Novo</a>
