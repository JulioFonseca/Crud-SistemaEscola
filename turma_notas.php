<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="materialize/css/materialize.min.css">
	
</head>
<body>

</body>
</html>
<?php
include('menu.php');
echo "<h2>Notas</h2><br><br><br>";
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "escola"; 
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco); 

	
@$turmas=$_POST['turmas'];


$sql = mysqli_query($conexao,"SELECT DISTINCT d.nome_disciplina as nomed, a.nome as nomea, n.nota_med as med, p.nome_prof as prof from notas as n, aluno as a, disciplina as d, professor as p 
	WHERE a.id_turma = '$turmas' AND n.id_aluno = a.id_aluno AND d.id_disciplina = n.id_disciplina AND p.area_atuacao = n.id_disciplina");
	

echo "<div id='container'><table border='1'><thead><tr><th>Nome</th><th>disciplina</th><th>Professor</th><th>média final</th></tr></thead>";
while($escrever = mysqli_fetch_assoc($sql)){
  // $sql = mysqli_query($conexao,"SELECT nome from aluno WHERE id_aluno= $escrever['id_aluno']");

echo "<tbody><tr><td>".$escrever['nomea']."</td><td>".$escrever['prof']."</td><td>".$escrever['nomed']."</td><td>".$escrever['med']."</td></tr></tbody>";
}
echo "</table></div>"; 
mysqli_close($conexao);
?>