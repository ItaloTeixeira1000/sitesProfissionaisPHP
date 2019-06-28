<?php
	include 'db.php';
	$id_aluno = isset($_GET['id_aluno']) == true ? $_GET['id_aluno'] : "";

	$query = "DELETE FROM alunos WHERE id_aluno = $id_aluno";
	if (mysqli_query($conexao, $query)) {
		header("Location: indexCrud.php?pagina=alunos");
	}else{
		echo "Erro na deleção";
	}
