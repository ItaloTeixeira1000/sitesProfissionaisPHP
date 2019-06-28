<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "abcabcabc123";
	$db = "escola_curso";

	$conexao = mysqli_connect($servidor,$usuario,$senha,$db);

	/*
	if ($conexao) {
		echo "Conectado com sucesso";
	}
	*/

	$query1 = "SELECT * FROM cursos";
	$consulta1 = mysqli_query($conexao,$query1);

	$query2 = "SELECT * FROM alunos";
	$consulta2 = mysqli_query($conexao,$query2);

	$query3 = "SELECT AC.id_aluno_curso, A.nome_aluno, C.nome_curso FROM alunos A, cursos C, alunos_cursos AC where A.id_aluno = AC.id_aluno and C.id_curso = AC.id_curso";
	$consulta3 = mysqli_query($conexao,$query3);
?>	