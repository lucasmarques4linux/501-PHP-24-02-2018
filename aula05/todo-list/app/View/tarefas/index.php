<div class="page-header">
	<h4>Lista de Tarefas</h4>
</div>

<table class="table">
	<tr>
		<th>Tarefa</th>
		<th>Status</th>
		<th>Ações</th>
	</tr>
<?php foreach ($tarefas as $tarefa): ?>
	<tr>
		<td><?= $tarefa->getDescricao() ?></td>
		<td><?= $tarefa->getStatus() ?></td>
		<td><a class='btn btn-info' href="?r=tarefas/edit&id=<?=$tarefa->getId()?>">Editar</a></td>
	</tr>
<?php endforeach; ?>
</table>

<a href="?r=tarefas/new" class="btn btn-sm btn-primary">Novo</a>
