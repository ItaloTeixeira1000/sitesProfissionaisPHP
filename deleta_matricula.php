<?php

	include_once 'db.php';

	$id_aluno_curso= isset($_GET['id_aluno_curso']) == true ? $_GET['id_aluno_curso'] : "";
	$query = "DELETE FROM alunos_cursos WHERE id_aluno_curso = $id_aluno_curso";
	
	if(mysqli_query($conexao,$query)){
		header("Location:indexCrud.php?pagina=matriculas");
	}else{
		echo "Erro na deleção ";
	}
