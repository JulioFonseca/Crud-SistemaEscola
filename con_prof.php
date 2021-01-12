<html>
 <head>
  
  <title>Exibir Professor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
 </head>
<body>



<?php
include('menu.php');
echo "<h2>Professores</h2><br><br><br>";
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "escola"; 
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
	@$turmas=$_POST['turmas'];

$res = mysqli_query($conexao,"SELECT * from professor where id_turma = '$turmas'");

echo "<div id='container'><table border='1'><thead><tr><th>Nome</th><th>Matricula</th><th>formaçao</th><th>area de atuação</th><th>instituicao de ensino</th></tr></thead>";
while($escrever=mysqli_fetch_assoc($res)){
echo "<tbody><tr><td>".$escrever['nome_prof']."</td><td>".$escrever['matricula_prof']. "</td><td>".$escrever['formacao_academica']."</td><td>" . $escrever['area_atuacao'] . "</td><td>" . $escrever['instituicao_ensino'] . "</td></tr></tbody>";
}
echo "</table></div>"; 
mysqli_close($conexao);
?>

</body>
</html>