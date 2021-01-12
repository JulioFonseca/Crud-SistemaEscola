<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
include('menu.php');
?>
	<form method="POST" action="turma_alunos.php">
<?php

	$servidor = "localhost"; 
	$usuario = "root"; 
	$senha = ""; 
	$banco = "escola"; 
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

$resc = mysqli_query($conexao,"SELECT * from turmas");
echo "Escolha a turma: <select name='turmas'>";
  while($mostrar=mysqli_fetch_assoc($resc)){
      
     echo "<option value=".$mostrar['id_turma'].">" . $mostrar['item'] ." | ". $mostrar['curso']." | ". $mostrar['nome_turma']. "</option>";
  }
  echo "</select><br>";
  

?>
      <input type="submit" value="consultar">
  </form>

</body>
</html>