<?php
	include 'db.php';
	$nome_curso = isset($_POST['nome_curso']) == true ? $_POST['nome_curso'] : "";

	$carga_horaria = isset($_POST['carga_horaria']) == true ? $_POST['carga_horaria'] : "";
	
	$query="INSERT INTO cursos(nome_curso,carga_horaria) VALUES ('$nome_curso',$carga_horaria)";
	if(mysqli_query($conexao,$query)){
		header('location:indexCrud.php?pagina=cursos');
	}else{
		echo "Erro ao inserir";
	}


?>