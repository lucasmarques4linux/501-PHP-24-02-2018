<h2>Lista de Tarefas</h2>

<table class="table">
	<tr>
		<th>Tarefa</th>
		<th>Status</th>
	</tr>
<?php foreach ($tarefas as $tarefa): ?>
	<tr>
		<td><?= $tarefa->getDescricao() ?></td>
		<td><?= $tarefa->getStatus() ?></td>
	</tr>
<?php endforeach; ?>
</table>

<a href="?r=tarefas/new" class="btn btn-sm btn-primary">Novo</a>
