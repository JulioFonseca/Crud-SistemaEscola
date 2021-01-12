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

	
@$aluno=$_POST['aluno'];


$sql = mysqli_query($conexao,"SELECT DISTINCT n.nota1 as n1, n.nota2 as n2, n.nota3 as n3, n.nota4 as n4, n.nota_med as med, d.nome_disciplina as nomed from notas as n, aluno as a, disciplina as d 
	WHERE n.id_aluno = '$aluno' AND d.id_disciplina = n.id_disciplina");
	

echo "<div id='container'><table border='1'><thead><tr><th>disciplina</th><th>1</th><th>2</th><th>3</th><th>4</th><th>média final</th></tr></thead>";
while($escrever = mysqli_fetch_assoc($sql)){
  // $sql = mysqli_query($conexao,"SELECT nome from aluno WHERE id_aluno= $escrever['id_aluno']");

echo "<tbody><tr><td>".$escrever['nomed']."</td><td>".$escrever['n1']."</td><td>".$escrever['n2']."</td><td>".$escrever['n3']."</td><td>".$escrever['n4']."</td><td>".$escrever['med']."</td></tr></tbody>";
}
echo "</table></div>"; 
mysqli_close($conexao);
?>