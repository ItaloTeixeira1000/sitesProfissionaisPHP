<?php
	include 'db.php';
	$id_aluno = isset($_POST['escolha_aluno']) == true ? $_POST['escolha_aluno'] : "";
	$id_curso= isset($_POST['escolha_curso']) == true ? $_POST['escolha_curso'] : "";
	$query = "INSERT INTO alunos_cursos(id_aluno,id_curso) VALUES ('$id_aluno','$id_curso')";
	if(mysqli_query($conexao,$query)){
		header('location:indexCrud.php?pagina=matriculas');
	}else{
		echo "Erro na inserção";
	}
	
?>