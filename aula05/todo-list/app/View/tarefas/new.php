<h2>Nova Tarefa</h2>
<form action="?r=tarefas/create" method="POST">
	<p>Tarefa:</p>
	<input type="text" name="descricao" required>
	<p>Status:</p>
	<input type="text" name="status" required>
	<p><input type="submit" value="Salvar"></p>
</form>
<a href="?r=tarefas">Voltar</a>