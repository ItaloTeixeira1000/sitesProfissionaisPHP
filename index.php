<?php
	#Conexão com banco de dados
	$servidor = "localhost";
	$usuario = "root";
	$senha = "abcabcabc123";
	$database = "escola_curso";


	$conexao = mysqli_connect($servidor,$usuario,$senha,$database);
/*
#Criando tabelas *************************
#Tabela cursos
	$query = "CREATE TABLE cursos(
	id_curso int not null auto_increment,
	nome_curso varchar(255) not null,
	carga_horaria int not null,
	primary key(id_curso)
	)";

	$executar = mysqli_query($conexao, $query);
	if($executar){
		echo "Executado com sucesso(cursos)<br>";
	}else{
	echo "Falha ao executar<br>";
}


#Tabela alunos
	$query = "CREATE TABLE alunos(
		id_aluno int not null auto_increment,
		nome_aluno varchar(255) not null,
		data_nascimento varchar(255),
		primary key(id_aluno)
)";

$executar = mysqli_query($conexao,$query);
if($executar){
	echo "Executado com sucesso(alunos)<br>";
}else{
	echo "Falha ao executar<br>";
}
#Tabela alunos_cursos
 
 $query = "CREATE TABLE alunos_cursos(
 		id_aluno_curso int not null auto_increment,
 		id_aluno int not null,
 		id_curso int not null,
 		primary key(id_aluno_curso)
)";

$executar = mysqli_query($conexao,$query);
if($executar){
	echo "Executado com sucesso(alunos_cursos)<br>";
}else{
	echo "Falha ao executar<br>";
}

#Inserir dados nas tabelas

$query = "INSERT INTO alunos(nome_aluno,data_nascimento)VALUES('Maria','01-04-1991')";

$executar = mysqli_query($conexao,$query);
if($executar){
	echo "Executado com sucesso(insert)<br>";
}else{
	echo "Falha ao executar<br>";
}

#INSERIR cursos

$query = "INSERT INTO cursos(nome_curso,carga_horaria)VALUES('PHP E MYSQL', 10)";
$executar = mysqli_query($conexao, $query);

#INSERIR alunos cursos
$query = "INSERT INTO alunos_cursos(id_aluno,id_curso)VALUES(2,1)";

$executar = mysqli_query($conexao, $query);


#DELETAR registros

if(mysqli_query($conexao,"DELETE FROM cursos WHERE id_curso = 2")){
	echo "Deletado com sucesso";
}else{
	echo "Erro ao deletar";
}


if (mysqli_query($conexao,"UPDATE alunos SET nome_aluno='Jose Miguel' WHERE id_aluno=1 ")){
	echo "ALterado com sucesso 1";
}

if( mysqli_query($conexao,"UPDATE alunos SET nome_aluno='Maria Capitolina' WHERE id_aluno = 2 ")){
	echo "Alterado com sucesso 2";
}

*/

echo "<table border=1> 
			<tr> 
				<th> 
					ID 
				</th> 
				<th>
					Nome
				</th> 
				<th>
					Data de Nascimento
				</th>
			</tr>	

	";

	#Consulta tabela alunos ---------------------

$consulta = mysqli_query($conexao,"SELECT * from alunos");

while ($linha = mysqli_fetch_array($consulta)) {
	echo "<tr><td>" . $linha['id_aluno'] . "</td>";
	
	echo "<td>" .  $linha['nome_aluno'] . "</td>" ;

	echo "<td>" . $linha['data_nascimento'] . "</td>";

	echo "</tr>";
}

echo "</table>";

#consulta tabela cursos --------------------------------


$consulta = mysqli_query($conexao, "SELECT * FROM cursos");

echo "<table border=1>
		<tr>
			<th>Id</th>
			<th>Nome do curso</th>
			<th> Carga horária</th>
		</tr>	

";


while ($linha = mysqli_fetch_array($consulta)) {

	echo "<tr><td>". $linha['id_curso'] . "</td>" ;

	echo "<td>".$linha['nome_curso'] . "</td>";

	echo "<td>".$linha['carga_horaria'] . "</td>";

	echo "</tr>";
	
}

echo "</table>";


#CONSULTA tabela alunos_cursos----------------------
$consulta = mysqli_query($conexao,"SELECT A.nome_aluno, C.nome_curso FROM alunos A, cursos C, alunos_cursos AC where A.id_aluno = AC.id_aluno and C.id_curso = AC.id_curso");

echo "<table border = 1>
		<tr>
			<th>Nome</th>
			<th>Curso</th>
		</tr>	
";


while ($linha = mysqli_fetch_array($consulta)) {
	echo "<tr><td>" . $linha['nome_aluno'] . "</td>";
	echo "<td>" . $linha['nome_curso'] . "</td></tr>";
}
echo "</table>";




