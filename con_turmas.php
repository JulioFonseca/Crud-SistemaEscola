<html>
 <head>
  
  <title>Exibir Turmas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
 </head>
<body>


<?php
include('menu.php');
echo "<h2>Turmas</h2><br><br><br>";
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "escola"; 
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco); 
$res = mysqli_query($conexao,'select * from turmas'); 
echo "<div id='container'><table border='1'><thead><tr><th>Nome</th><th>ativo</th><th>curso</th><th>item</th><th>vagas</th></tr></thead>";
while($escrever=mysqli_fetch_assoc($res)){
echo "<tbody><tr><td>".$escrever['nome_turma']."</td><td>".$escrever['ativo']. "</td><td>".$escrever['curso']."</td><td>" . $escrever['item'] . "</td><td>" . $escrever['vagas'] . "</td></tr></tbody>";
}
echo "</table></div>"; 
mysqli_close($conexao);
?>

</body>
</html>