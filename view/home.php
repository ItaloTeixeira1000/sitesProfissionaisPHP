	


<h1 style="text-align: center;">Bem-vindo a DogCursos.</h1>

<form method="POST" action="login.php">
	<label class="badge badge-secondary">Usuário</label>
	<input type="text" name="usuario" class="form-control" placeholder="Nome do Usuário">
	<br>
	<label class="badge badge-secondary">Senha</label>
	<input type="password" name="senha" placeholder="Digite a senha" class="form-control">
	<br>
	<input type="submit" value="Entrar" class="btn btn-success" name="">
</form>
<br>

<?php if (isset($_GET['erro'])) { ?>
	<div class="alert alert-danger" role="alert">
		Usuário e/ou senha inválidos.
	</div>
<?php } ?>
