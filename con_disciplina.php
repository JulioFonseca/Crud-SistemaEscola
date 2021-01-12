<html>
 <head>
  
  <title>Exibir Disciplina</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

 </head>
<body>



<?php
include('menu.php');
echo "<h2>Disciplinas</h2><br><br><br>";
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "escola"; 
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco); 
$res = mysqli_query($conexao,'select * from disciplina'); 
echo "<div id='container'><table border='1'><thead><tr><th>Disciplina</th></tr></thead>";
while($escrever=mysqli_fetch_assoc($res)){
echo "<tbody><tr><td>".$escrever['nome_disciplina']. "</td></tr></tbody>";
}
echo "</table></div>"; 
mysqli_close($conexao);
?>

</body>
</html>