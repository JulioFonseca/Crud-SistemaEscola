<html>
 <head>
  
  <title>Exibir alunos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
 </head>
<body>



<?php
include('menu.php');

echo "<h2>alunos</h2><br><br><br>";
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "escola"; 
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco); 
$res = mysqli_query($conexao,"select * from aluno"); 
echo "<div id='container'><table  border='1'><thead><tr><th>Nome</th><th>Matricula</th><th>nascimento</th><th>ano</th><th>telefone</th></tr></thead>";
while($escrever=mysqli_fetch_assoc($res)){
echo "<tbody><tr><td>".$escrever['nome']."</td><td>".$escrever['matricula']. "</td><td>".$escrever['nascimento']."</td><td>" . $escrever['ano'] . "</td><td>" . $escrever['celular'] . "</td></tr></tbody>";
}
echo "</table></div>"; 
mysqli_close($conexao);
?>

</body>
</html>