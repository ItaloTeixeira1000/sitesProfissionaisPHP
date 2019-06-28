<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matrícula</a>
<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Aluno</th>
			<th>Curso</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>

			<?php
				while ($linha = mysqli_fetch_array($consulta3)) {
					echo "<tr><td>" . $linha['nome_aluno'] . "</td><td>". $linha['nome_curso'] . "</td>";

					?>
			<td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">
				<i class="fas fa-trash-alt"></i>
			</a></td></tr>

		<?php
				}	
			?>

	</tbody>
		
			
</table>
