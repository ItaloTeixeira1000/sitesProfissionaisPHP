<?php
	include_once 'db.php';
	$id_aluno = isset($_POST['id_aluno']) == true ? $_POST['id_aluno'] : "";
	$nome_aluno = isset($_POST['nome_aluno']) == true ? $_POST['nome_aluno'] : "";
	$data_nascimento = isset($_POST['data_nascimento']) == true ? $_POST['data_nascimento'] : "";



	$query = "UPDATE alunos SET nome_aluno = '$nome_aluno', data_nascimento = '$data_nascimento' WHERE id_aluno='$id_aluno'";

	if (mysqli_query($conexao,$query)) {
		header("location:indexCrud.php?pagina=alunos");
	}else{
		echo "Erro na atualização";
	}



