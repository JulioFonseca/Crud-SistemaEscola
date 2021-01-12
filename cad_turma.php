<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cadastro turma</title>
</head>
<body>
	<?php include('menu.php'); ?>
<br>
<br>
	<form method="post" action="cad_turma.php">
<center>Nome: <select style="width: 1000px" name="nome_turma">
	<OPTION>A</OPTION>
	<OPTION>B</OPTION>
	<OPTION>C</OPTION>
	<OPTION>D</OPTION>
	</select>
</center>
	<br>
		<table border="0" align="center" width="1000px">
			<tr>
				<td bgcolor="#FFEFD5">
		<h3 align="center"> Rede fisica</h3>
		</td>
		</tr></table>
		<br>
		<br>
		<center>Predio:	<select style="width: 1000px" name="predio">
			<option>Eeep Professor Onelio Porto</option>
			<option>Eeep Presidente Roosevelt</option>
			<option>Eeep Maria Dolores de Alcantara e Silva</option>
			<option>Eeep Professor Aristoteles de Sousa</option>
		</select>
	</center>
	<br>
	<table border="0" align="center" width="1000px">
			<tr>
				<td bgcolor="#FFEFD5">
		<h3 align="center"> Horário de aula</h3>
		</td>
		</tr></table>
		<br>
		<br>
	<div align="center">
		Hora inicial: <select style="width: 150px" name="hora_i">
								<?php for ($i=1; $i <= 23 ; $i++) { 
							echo"<option>$i</option>"; } 
								?>
						</select> Hrs <select style="width: 150px" name="min_i">
								<?php for ($i=1; $i <= 59 ; $i++) { 
							echo"<option>$i</option>"; } 
								?>
						</select> Min<br>
		Hora Final: <select style="width: 160px" name="hora_f">
								<?php for ($i=1; $i <= 23 ; $i++) { 
							echo"<option>$i</option>"; } 
								?>							
						</select> Hrs <select style="width: 150px" name="min_f">
								<?php for ($i=1; $i <= 59 ; $i++) { 
							echo"<option>$i</option>"; } 
								?>
						</select> Min
						<br>
						<br>
						</div>	
			<table border="0" align="center" width="1000px">
			<tr>
				<td bgcolor="#FFEFD5">
		<h3 align="center"> Dias da semana</h3>
		</td>
		</tr></table>
		<table border="0" align="center" width="1000px">
		<tr>
		<td>dom <br><input type="checkbox" name="seg">
		</td>
		<td>seg <br><input type="checkbox" name="seg">
		</td>
		<td>ter <br><input type="checkbox" name="ter">
		</td>
		<td>qua <br><input type="checkbox" name="qua">
		</td>
		<td>qui <br><input type="checkbox" name="qui">
		</td>
		<td>sex <br><input type="checkbox" name="sex">
		</td>
		<td>sab <br><input type="checkbox" name="sab">
		</td>
	</tr>
	</table>
	<br>
	<br>
	<div align="center">
		<input type="submit" value="Incluir" >
		<input type="reset" value="Limpar" >
</div>
</form>
</body>
</html>
<?php 
	
	$servidor = "localhost"; /*maquina a qual o banco de dados está*/
	$usuario = "root"; /*usuario do banco de dados MySql*/
	$senha = ""; /*senha do banco de dados MySql*/
	$banco = "escola"; /*seleciona o banco a ser usado*/
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

	@$nome =$_POST['nome_turma'];
	if (!$conexao) {
      die("Connection failed: " . mysqli_connect_error());
}
	$sql = "INSERT INTO turmas VALUES ('', '$nome', '','','','','','')";
	if (mysqli_query($conexao, $sql)) {
		      echo "Cadastro realizado com sucesso";
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
		}
	
mysqli_close($conexao);


 ?>