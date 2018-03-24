<p>Nova Tarefa</p>
<form action="?r=tarefas/create" method="POST">
	<p>Tarefa:<input type="text" name="descricao" required></p>
	<p>Status: <select name="status">
	<?php foreach($status as $key => $value): ?>
		<option value="<?=$key?>"><?=$value?></option>
	<?php endforeach; ?>
	</select> </p>	
	<p><a class="btn btn-warning" href="?r=tarefas">Voltar</a> <input type="submit" class="btn btn-success" value="Salvar"></p>
</form>