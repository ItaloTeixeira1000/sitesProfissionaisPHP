<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DogCursos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="bootstrap/css/nav.css" rel="stylesheet">
    <link href="bootstrap/css/docs.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="bootstrap/css/estilo.css" rel="stylesheet">
</head>
<body>

	<header>
		<div class="container">
			<nav>
				
				<div id="menu">
					<a href="?pagina=cursos">Cursos</a>
					<a href="?pagina=alunos">Alunos</a>
					<a href="?pagina=matriculas">Matriculas</a>
					<?php if (isset($_SESSION['login'])) { ?>
						<a href="logout.php"><?php echo $_SESSION['usuario'];?>(sair)</a>
				<?php } ?>
				</div>
			</nav>	
		</div>
	</header>

	<div id="conteudo" class="container">


