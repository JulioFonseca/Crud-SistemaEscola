<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<?php
include('menu.php');
?>
<form method="post" action="cad_disciplina.php">
	<b>INSIRA O NOME DA DISCIPLINA DESEJADA:</b>
	<br><br><input type="text" name="nome" required=""> <br><br>

	 <input type='submit' value='Enviar'> <br>
	
	<br><br>
	<p align="center"></p>
	</form>



<?php

$servidor = "localhost"; /*maquina a qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "escola"; /*seleciona o banco a ser usado*/
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);  

	@$nome=$_POST['nome'];
	@$prof=$_POST['prof'];


  



		if ($conn->connect_error) {
      die("Connection failed: " . mysqli_connect_error());
}	 
$sql2 = "INSERT INTO disciplina VALUES(NULL,'$nome','$prof')";
	
if ($conn->query($sql2) === TRUE) {
echo "Cadastro realizado com sucesso";
} else {
echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();

  ?>
</body>
</html>