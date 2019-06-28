<?php
	include_once 'db.php';
	$id_curso = isset($_POST['id_curso']) == true ? $_POST['id_curso'] : "";
	$nome_curso = isset($_POST['nome_curso']) == true ? $_POST['nome_curso'] : "";
	$carga_horaria = isset($_POST['carga_horaria']) == true ? $_POST['carga_horaria'] : "";



	$query = "UPDATE cursos SET nome_curso = '$nome_curso', carga_horaria = '$carga_horaria' WHERE id_curso='$id_curso'";

	if (mysqli_query($conexao,$query)) {
		header("location:indexCrud.php?pagina=cursos");
	}else{
		echo "Erro na atualização";
	}



