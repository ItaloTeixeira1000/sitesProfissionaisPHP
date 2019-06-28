<?php
	include 'db.php';
	$nome_aluno = isset($_POST['nome_aluno']) == true ? $_POST['nome_aluno'] : "";
	$data_nascimento = isset($_POST['data_nascimento']) == true ? $_POST['data_nascimento'] : "";
	$query = "INSERT INTO alunos(nome_aluno,data_nascimento) VALUES ('$nome_aluno','$data_nascimento')";
	if(mysqli_query($conexao,$query)){
		header('location:indexCrud.php?pagina=alunos');
	}else{
		echo "Erro na inserção";
	}
	
?>