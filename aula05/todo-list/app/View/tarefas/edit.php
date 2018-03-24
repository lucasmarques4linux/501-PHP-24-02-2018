<p>Editar Tarefa</p>
<form action="?r=tarefas/update&id=<?=$tarefa->getId()?>" method="POST">
	<p>Tarefa:<input type="text" value="<?=$tarefa->getDescricao()?>" name="descricao" required></p>
	<p>Status: <select name="status">
	<?php foreach($status as $key => $value):?>
		<?php
			$selected = null;
			if ($tarefa->getStatus() == $value){
				$selected = 'selected';
			}
		?>
		<option value="<?=$key?>" <?=$selected?>><?=$value?></option>
	<?php endforeach; ?>
	</select> </p>	
	<p><a class="btn btn-warning" href="?r=tarefas">Voltar</a> <input type="submit" class="btn btn-success" value="Salvar"></p>
</form>