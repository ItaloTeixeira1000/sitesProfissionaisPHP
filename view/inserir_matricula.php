<h1>Inserir nova matrícula</h1>
<br>
<form method="POST" action="processa_matricula.php">
	<p class="badge badge-secondary">Selecione um aluno</p>
	<select class="form-control" name="escolha_aluno">
		<option>Selecione um aluno</option>
		<?php
			while ($linha = mysqli_fetch_array($consulta2)) {
				echo "<option value='" . $linha['id_aluno'] . "'>" . $linha['nome_aluno'] . "</option>";

			}
		?>
		</select>
		<br>

		<p class="badge badge-secondary">Selecione um curso</p>

		<select class="form-control" name="escolha_curso">
			<option>Selecione um curso</option>
		<?php
			while ($linha = mysqli_fetch_array($consulta1)) {
				echo "<option value='" . $linha['id_curso'] . "'>" . $linha['nome_curso'] . "</option>";

			}
		?>
		</select>
		<br>
		<input class="btn btn-success" type="submit" value="Matricular aluno no curso" name="">	
</form>		