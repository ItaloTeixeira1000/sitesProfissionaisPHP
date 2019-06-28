<?php if(!isset($_GET['editar'])){ ?>

<h1>Insira novo curso</h1>
<form class="form-group" method="POST" action="processa_curso.php">
	<label class="badge badge-secondary">Nome curso:</label><br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
	<br>
	<label class="badge badge-secondary">Carga horária: </label><br>
	<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária">
	<br>
	<input class="btn btn-success" type="submit" value="Inserir curso" name="">
</form>

<?php }else{ ?>
<?php while ($linha = mysqli_fetch_array($consulta1)) { ?>	
	<?php if($linha['id_curso'] == $_GET['editar'] ){ ?>

	<h1>Editar curso</h1>
<form class="form-group" method="POST" action="edita_curso.php">
	<input class="form-control" type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
	<label class="badge badge-secondary">Nome curso:</label><br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
	<br>
	<label class="badge badge-secondary">Carga horária: </label><br>
	<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo $linha['carga_horaria']; ?>">
	<br>
	<input class="btn btn-success" type="submit" value="Editar curso" name="">
</form>	
<?php } ?>
<?php } ?>
<?php } ?>