<h2>Editar Usuário</h2>
<form action="?r=usuarios/update&id=<?= $usuario['id']?>" method="POST">
	<p>Usuário:</p>
	<input type="text" name="usuario" value="<?= $usuario['usuario'] ?>">
	<p><input type="submit" value="Salvar"></p>
</form>
<a href="?r=usuarios">Voltar</a>