<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>

<table class="table table-hover table-striped" id="cursos">
			<thead>
				<tr> 
					<th>Nome do curso</th>
					<th>Carga horária</th>
					<th>Deletar</th>
					<th>Editar</th>
				</tr>
			</thead>

			<tbody>
	 

				<?php
					 while ($linha = mysqli_fetch_array($consulta1)) {
						echo "<tr><td>" . $linha['nome_curso'] . "</td> <td>".$linha['carga_horaria'] . "</td>";
						
					
				?>
					<td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
						<i class="fas fa-trash-alt"></i>
					</a></td>
					<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
						<i class="fas fa-edit"></i>
					</a></td></tr>

				<?php
					}

				?>
			</tbody>	
</table>
