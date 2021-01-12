<html>
 <head>
  
  <title>Exibir Notas</title>

 
 </head>
<body>



<?php
include('menu.php');
echo "<h2>Notas</h2><br><br><br>";
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "escola"; 
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco); 

/*/SELECT c.nome,p.nome, v.qtdvendida,v.data_venda FROM clientes as c,produtos
as p, vendas as v WHERE c.idclientes = v.clientes_idclientes AND p.idprodutos
= v.produtos_idprodutos;/*/



/*/$res = mysql_query($conexao, "SELECT a.nome as nomea, * FROM aluno as a, disciplina as d, notas as n 
  WHERE n.id_aluno = a.id_aluno ");/*/
  ?>
<form method="POST" action="cons_notas.php">
<?php
$resc = mysqli_query($conexao,"select * from aluno");
echo "Escolha o aluno que deseja consultar as notas: <select name='aluno'>";
  while($mostrar=mysqli_fetch_assoc($resc)){
      
    echo "<option value=".$mostrar['id_aluno'].">" . $mostrar['nome'] . "</option>";
  }
  echo "</select><br>";
  

?>
      <input type="submit" value="consultar">
  </form>
  <form method="post" action="turma_notas.php">
  	<?php
  	$res = mysqli_query($conexao,"select * from turmas");
echo "Escolha a turma que deseja consultar as notas dos alunos: <select name='turmas'>";
  while($mostrar=mysqli_fetch_assoc($res)){
      
    echo "<option value=".$mostrar['id_turma'].">" . $mostrar['item'] ." | ". $mostrar['curso']." | ". $mostrar['nome_turma']. "</option>";
  }
  echo "</select><br>";
  mysqli_close($conexao);
  ?>
  	<input type="submit" value="consultar">

  </form>
</body>
</html>