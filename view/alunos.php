<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data de Nascimento</th>

			<th>Deletar</th>
			<th>Editar</th>
		</tr>
	</thead>

	<tbody>

		<?php
			while ($linha = mysqli_fetch_array($consulta2)) {
				echo "<tr><td>" . $linha['nome_aluno'] . "</td><td>" . $linha['data_nascimento'] . "</td>";
			
		?>

		<td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
			<i class="fas fa-user-times"></i>
		</a></td>
		<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
			<i class="fas fa-user-edit"></i>

		</a></td></tr>
		<?php
			}
		?>
	</tbody>
</table>