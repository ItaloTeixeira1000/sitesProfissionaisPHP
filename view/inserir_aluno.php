<?php if(!isset($_GET['editar'])){ ?>
<form class="form-group" method="POST" action="processa_aluno.php">
	<label class="badge badge-secondary">Nome do aluno: </label><br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Nome do aluno"><br>
	<label class="badge badge-secondary">Data de nascimento</label><br>
	<input class="form-control"  type="text" name="data_nascimento" placeholder="Data de nascimento"><br>
	<input class="btn btn-success"  type="submit" value="Inserir" name="">

</form>

<?php }else{ ?>
	<?php while ($linha = mysqli_fetch_array($consulta2)) { ?>
		<?php if($linha['id_aluno'] == $_GET['editar'] ){ ?>

	<form class="form-group" method="POST" action="edita_aluno.php">
		<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
	<label class="badge badge-secondary">Nome do aluno: </label><br>
	<input class="form-control" type="text" value="<?php echo $linha['nome_aluno']; ?>" name="nome_aluno" placeholder="Nome do aluno"><br>
	<label class="badge badge-secondary">Data de nascimento</label><br>
	<input class="form-control" type="text" name="data_nascimento" value="<?php echo $linha['data_nascimento'];  ?>" placeholder="Data de nascimento"><br>
	<input class="btn btn-success" type="submit" value="Editar aluno" name="">

</form>
<?php } ?>
<?php } ?>
<?php } ?>


