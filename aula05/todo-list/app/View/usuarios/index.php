<h2>Lista de Usuários</h2>

<table>
	<tr>
		<th>Nome</th>
		<th>Email</th>
	</tr>
<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?= $usuario->getNome() ?></td>
		<td><?= $usuario->getEmail() ?></td>
	</tr>
<?php endforeach; ?>
</table>

<a href="?r=usuarios/new">Novo</a>
