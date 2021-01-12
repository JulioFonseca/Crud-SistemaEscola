<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>aluno</title>
        
           
</head>
<body>
	<?php
$servidor = "localhost"; /*maquina a qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "escola"; /*seleciona o banco a ser usado*/
$conn = mysqli_connect($servidor,$usuario,$senha,$banco);  
	include('menu.php');
?>
		<form method="post" action="cadastrar_aluno.php">
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
			<td>
			<label > Nome:</label> <br> 
			<input type="text" name="nome"></td>
			<td>
			<label>ID do Aluno no educacenso:</label><br>
			 <input type="text" name="id_edu">
			</td>
			 
			<td>Sexo: <br><select style="width: 150px" name="sexo">
				<option>Masculino</option>
				<option>Feminino</option>
				<option>Transgeneros</option>
			</select></td>
			<td>
			Nascimento:<br>
			<input type="text" name="data_nasc"></td>
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
				<td>Pai <br> <input type="text" name="pai" style="width: 400px"></td>
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
			<td>Responsavel<br> <input type="text" name="resp" style="width: 400px" min="9" stage="9"></td>
			<td>Fone res<br><input type="text" name="numero" min="9"></td>
			
			<td>Celular<br><input type="text" name="numero2" style="width: 170px" min="9" stage="9"></td>
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
		<td>fone <br> <input type="text" name="fone" min="9" stage="9"></td>
		<td>celular <br> <input type="text" name="cel" min="9" stage="9"></td>
		<td>email <br> <input type="text" name="email"></td>
		</tr>
		<tr>
		<td>Nacionalidade <br><select style=" width: 405px" name="nacionalidade">
			<option>Brasileiro</option>
		</select></td>
		<td>País<br><select name="pais">
<option value="Brasil" selected>Brasil</option>
</select>

		</td>
		<td>Naturalidade<br><select style="width: 175px" name="naturalidade">
			<option>brasileiro(a)</option>
		</select></td>
	</tr>
	</table>
		<br>
		<br>
		</fieldset>
		
<?php

	$servidor = "localhost"; /*maquina a qual o banco de dados está*/
	$usuario = "root"; /*usuario do banco de dados MySql*/
	$senha = ""; /*senha do banco de dados MySql*/
	$banco = "escola"; /*seleciona o banco a ser usado*/
	$conn = mysqli_connect($servidor,$usuario,$senha,$banco);

	$resc = mysqli_query($conn,"select * from turmas where vagas >= 1");
	echo "Oferta:";
	echo "<div id='container'><table class='bordered striped centered'><thead><tr><th>Oferta </th><th>vagas</th></tr></thead>";
  while($mostrar=mysqli_fetch_assoc($resc)){
      
    echo "<tbody><tr><td><input type='radio' name='oferta' value=".$mostrar['id_turma'].">" .$mostrar['item']." | ".$mostrar['curso']."</td><td>| ".$mostrar['vagas']."</td><td></tbody>";
  }
  echo "</table></div>"; 

  ?>
  		<div align="center">
		<input type="submit" value="Incluir" >
		<input type="reset" value="Limpar" >
</div>
	</form>
</body>
</html>
<?php 
/*/
$servidor = "localhost"; 
$usuario = "root";
$senha = ""; 
$banco = "escola"; 
$conn = mysqli_connect($servidor,$usuario,$senha,$banco); 


	@$ano = $_POST['ano'];
	@$matricula = $_POST['matricula'];  	  
	@$nome = $_POST['nome']; 
	@$sexo = $_POST['sexo'];  
	@$nascimento = $_POST['data_nasc']; 
	@$mae = $_POST['mae']; 
	@$pai = $_POST['pai'];    
	@$responsavel = $_POST['resp']; 
	@$fone_resp = $_POST['numero'];  
	@$celular = $_POST['numero2'];  
	@$email = $_POST['email'];
	@$nascionalidade = $_POST['nacionalidade']; 
	@$pais = $_POST['pais']; 
	@$oferta = $_POST['oferta']; 

	

	//calculo das vagas
$res = mysqli_query($conn,"select * from turma WHERE id_turma = $oferta");
	while($escrever=mysqli_fetch_assoc($res)){
	
	@$qtdV = 0;
	@$qtdV = ($escrever['vagas']-1);
}

	 
	 //Check connection
if ($conn->connect_error) {
      die("Connection failed: " . mysqli_connect_error());
}	 
$sql = "INSERT INTO aluno VALUES(NULL ,'$oferta','$ano','$matricula','$nome','$sexo','$nascimento','$mae','$pai','$responsavel','$fone_resp','$celular','$email','$nascionalidade','$pais')";

$sql2 = "UPDATE turmas SET vagas=".intval($qtdV)." WHERE id_turma = '$oferta'";
	
if ((mysqli_query($conn, $sql)) && (mysqli_query($conn, $sql2))) {
		      echo "Cadastro realizado com sucesso";
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
mysqli_close($conn);
/*/
?>
