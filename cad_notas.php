<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<h2>Cadastrar Nota</h2><br><br><br>

	<?php
$servidor = "localhost"; /*maquina a qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "escola"; /*seleciona o banco a ser usado*/
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
	include('menu.php');  
?>

	<form method="post" action="cad_notas.php">
		<?php  
		$res = mysqli_query($conexao,"select * from disciplina");
echo "Escolha a disciplina: <select name='disci'>";
  while($escrever=mysqli_fetch_assoc($res)){
    
      echo '<option value='.$escrever["id_disciplina"].'>'. $escrever['nome_disciplina'].' </option>';
  }
echo "</select></div><br>";

	$resc = mysqli_query($conexao,"select * from aluno");
echo "Escolha o aluno: <select name='aluno'>";
  while($mostrar=mysqli_fetch_assoc($resc)){
      
    echo "<option value=".$mostrar['id_aluno'].">" . $mostrar['nome'] . "</option>";
  }
  echo "</select><br>";
?>

	Nota 1: <input type="text" name="n1"> <br>
	Nota 2: <input type="text" name="n2"> <br>
	Nota 3: <input type="text" name="n3"> <br>
	Nota 4: <input type="text" name="n4"> <br>
	<br><br>
	<input type='submit' value='Enviar'>
	</form>

</body>
</html>
<?php

$servidor = "localhost"; /*maquina a qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "escola"; /*seleciona o banco a ser usado*/
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);  

	@$aluno=$_POST['aluno'];
	@$disc=$_POST['disci'];
	@$nota1=$_POST['n1'];
	@$nota2=$_POST['n2'];
	@$nota3=$_POST['n3'];
	@$nota4=$_POST['n4'];

	@$media=(($nota1+$nota2+$nota3+$nota4)/4);

		if ($conn->connect_error) {
      die("Connection failed: " . mysqli_connect_error());
}	 
$sql2 = "INSERT INTO notas VALUES('','$aluno','$disc','$nota1','$nota2','$nota3','$nota4','$media')";
	
if ($conn->query($sql2) === TRUE) {
echo "Cadastro realizado com sucesso";
} else {
echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();

  ?>