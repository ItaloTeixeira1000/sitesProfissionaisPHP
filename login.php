<?php 

	include_once 'db.php';
	$usuario = isset($_POST['usuario']) == true ? addslashes($_POST['usuario']) : "";
	
	$senha = isset($_POST['senha']) == true ? md5($_POST['senha']) : "";


	

	$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

	$consulta = mysqli_query($conexao,$query);


	if ( mysqli_num_rows($consulta) == 1) {
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = $usuario;
		header("location:indexCrud.php");
	}else{
		header("location:indexCrud.php?erro");
	}