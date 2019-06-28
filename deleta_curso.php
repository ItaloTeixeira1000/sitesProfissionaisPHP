<?php

	include_once 'db.php';

	$id_curso= isset($_GET['id_curso']) == true ? $_GET['id_curso'] : "";
	$query = "DELETE FROM cursos WHERE id_curso = $id_curso";
	
	if(mysqli_query($conexao,$query)){
		header("Location:indexCrud.php?pagina=cursos");
	}else{
		echo "Erro na deleção ";
	}
