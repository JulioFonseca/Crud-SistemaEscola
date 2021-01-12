<!DOCTYPE html>
<html>
<head>
	<title>Alterar aluno</title>
</head>
<body>
	<form method="post" action="alt_aluno.php">
	<?php
include('menu.php');
$servidor = "localhost"; /*maquina a qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "escola"; /*seleciona o banco a ser usado*/
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);  


$res = mysqli_query($conexao,"select * from aluno");
echo "Escolha o aluno: <select name='idaluno'>";
  while($escrever=mysqli_fetch_assoc($res)){
    
      echo '<option value='.$escrever["id_aluno"].'>'. $escrever['nome'].' </option>';
  //implode('/',array_reverse(explode('-',$date)));
  }
echo "</select></div><br>";

							?>

	
		<fieldset style = "width: 70%; margin: 0px auto;">
			<legend>Geral</legend>
			<br>
			Ano: <select name="ano" style="width: 150px;">
				<option>2018</option>
				<option>2017</option>
				<option>2016</option>
			</select> <br>
			Matricula: <select name="matricula" style="width: 122px;">
				<option>Admitido</option>
			</select>
			Movimento: <select>
				<option>novato</option>
				<option>veterano</option>
			</select>
			<br>
		</fieldset>
		<fieldset style = "width: 70%; margin: 0px auto;">
			<legend>Dados basicos</legend>
			<br>
			<table border="0">
			<tr>
			
				<label>Nome:</label>
			
			 
				 <td><input type='text' name='nome' required></td>
			
				
			
			<td>
			<label>ID do Aluno no educacenso:</label><br>
			 <input type="text" name="id_edu" >
			</td>
			</tr>
			
			<tr> 
			<td>Sexo: <br><select style="width: 150px">
				<option>Masculino</option>
				<option>Feminino</option>
				<option>Transgeneros</option>
			</select></td>
			<td>
			Nascimento:<br>
			<input type="text" name="data_nasc" required></td>
			<td>
			Mae: <br><input type="text" name="mae"></td></tr>
		
		<br>
	</table>
	</fieldset>
		<fieldset style = "width: 70%; margin: 0px auto;">
			<table border="0" width="1000px">
			<legend>Dados complementares</legend>
			<br>
				<tr>
				<td>Pai <br> <input type="text" name="pai" style="width: 400px" required></td>
				<td>Raça <br> <select name="raca">
				<option>negro</option>
				<option>branco</option>
				<option>pardo</option>
			</select> </td>
			<td>bolsa escolar:<br> <select name="bolsa">
				<option>Nao</option>
				<option>Sim</option>
			</select></td>
			</tr>
			<tr>
			<td>Responsavel<br> <input type="text" name="resp" style="width: 400px" required></td>
			<td>Fone res<br><input type="text" name="numero"></td>
			
			<td>Celular<br><input type="text" name="numero2" style="width: 170px"></td>
			</tr>
			<tr>
				<td>
			Logradouro<br><input type="text" name="log" style="width: 400px"></td>
			<td>NO<br><input type="text" name="no"></td>
			<td>complemento <br><input type="text" name="comp"></td>
			</tr>
			<tr>
				<td>
			
					Bairro <br><input type="text" name="bairro" required><br>
			        Cidade <br><input type="text" name="cidade" required>

			</td>
			<td><p align="center">Localizaçao/zona de residencia</p>
				<center>
			<input type="radio" name="loc">Rural <input type="radio" name="loc">Urbana</center>
		</td></tr>
		<tr><td>
		CEP <br> <input type="text" name="cep" style="width: 170px"></td>
		<td>fone <br> <input type="text" name="fone"></td>
		<td>celular <br> <input type="text" name="cel" required></td>
		<td>email <br> <input type="text" name="email"></td>
		</tr>
		<tr>
		<td>Nacionalidade <br><select style=" width: 405px">
			<option>Brasileiro</option>
		</select></td>
		<td>País<br><select>
			<option value="África do Sul">África do Sul</option>
<option value="Albânia">Albânia</option>
<option value="Alemanha">Alemanha</option>
<option value="Brasil">Brasil</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>



</select>

		</td>
		<td>Naturalidade<br><select style="width: 175px">
			<option>brasileiro(a)</option>
		</select></td>
	</tr>
	</table>
		<br>
		<br>
		</fieldset>
		<div align="center">
		<input type="submit" value="Incluir" >
		<input type="reset" value="Limpar" >
</div>
	</form>

</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";
$conn = mysqli_connect($servername, $username, $password, $dbname);


	@$aluno =$_POST['idaluno'];
	@$nome =$_POST['nome'];
	@$ano =$_POST['ano'];
	@$mat =$_POST['matricula']; 
	@$sexo =$_POST['sexo'];  
	@$nasc =$_POST['data_nasc']; 
	@$mae =$_POST['mae']; 
	@$pai =$_POST['pai']; 
	@$resp =$_POST['resp'];
	@$cel =$_POST['cel']; 
	@$email =$_POST['email'];
	@$nasci =$_POST['nacionalidade']; 
	@$pais =$_POST['pais'];
	@$cidade = $_POST['cidade']; 
	@$bairro = $_POST['bairro']; 
	



// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE aluno SET nome = '$nome', cidade= '$cidade', bairro= '$bairro', ano= '$ano', matricula= '$mat', sexo= '$sexo', nascimento= '$nasc', mae= '$mae', pai= '$pai', responsavel= '$resp', celular= '$cel', email= '$email', nacionalidade= '$nasci', pais= '$pais'  WHERE id_aluno = '$aluno' ";

if (mysqli_query($conn, $sql)) {
echo "Atualização feita com sucesso";
} else {
echo "Erro ao gravar o registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>