<?php

	session_start();

#BAse de Dados
include_once 'db.php';

#Cabeçalho
include_once 'header.php';


if (isset($_SESSION['login'])) {
	if (isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	}else{
		$pagina = 'cursos';
	
	}
}else{
	$pagina = 'home';
	}

	#Conteúdo da página
	

	switch ($pagina) {
		case 'cursos':
			include 'view/cursos.php';
			break;
		case 'alunos':
				include 'view/alunos.php';
				break;
		case 'matriculas':
				include 'view/matriculas.php';
				break;	
		case 'inserir_curso':
				include 'view/inserir_curso.php';
				break;
		case 'inserir_aluno':
				include 'view/inserir_aluno.php';
				break;
		case 'inserir_matricula':
			include 'view/inserir_matricula.php';
			break;								
		
		case 'home':
			include 'view/home.php';
			break;
			
			
	}


	#Rodapé

	include_once 'footer.php';
