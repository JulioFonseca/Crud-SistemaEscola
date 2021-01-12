<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu</title>
    
            
    
     
     
</head>
<b>

	<body>
		<?php include('menu.php'); ?>
		<form method="post" action="cad_prof.php">
	
		<fieldset style = "width: 30%; margin: 0px auto;">
			<table border="0" width="1000px">
			<legend>Dados do Professor</legend>
			<br>
			<tr>
			<td>
			Matrícula: <br><input type="text" name="matricula" style="width: 80px">
			</td>
			</tr>
			<tr>
			<td>
			Nome: <br> <input type="text" name="nome" style="width: 300px">
			</td>
			<td>
			 Bairro:  <br> <input type="text" name="bairro" style="width: 170px">
			</td>
			<td>
         	CPF: <br><input type="text" name="cpf" style="width: 90px">
			</td>
			</tr>
			<tr>
			<td>
			Endereço: <br> <input type="text" name="end" style="width: 300px">
			</td>
			<td>
			Nº endereço: <br> <input type="text" name="numero" style="width: 90px">	
			</td>		
			<td>
		    RG: <br> <input type="text" name="rg" style="width: 90px">
			<tr>
			<td>		
			Cidade: <br> <input type="text" name="city" style="width: 170px">		
			</td>
			<td>
			CEP: <br><input type="text" name="cep" style="width: 90px">
		    </td>
			<td>
			Formação Acadêmica: <br><input type="text" name="formacao" style="width: 150px">		
			</td>
			</tr>
		    <tr>
		   	<td>
		    UF<br><input type="text" name="uf">
			</td>
			<td>		
			Instituição de Ensino: <br><input type="text" name="instituicao" style="width: 150px">	
			</td>
			<td>
			Área de atuação: 
			<br><?php

				$servidor = "localhost"; /*maquina a qual o banco de dados está*/
				$usuario = "root"; /*usuario do banco de dados MySql*/
				$senha = ""; /*senha do banco de dados MySql*/
				$banco = "escola"; /*seleciona o banco a ser usado*/
				$conn = mysqli_connect($servidor,$usuario,$senha,$banco); 


				$res = mysqli_query($conn,"select * from disciplina");
			echo " <select name='area'>";
			echo "<option value=''>----SELECIONE AQUI-----</option>";  
			while($mostrar=mysqli_fetch_assoc($res)){
     
    echo "<option value=".$mostrar['id_disciplina'].">". $mostrar['nome_disciplina']. "</option>";
    			}
    echo "</select>"
    ?>
			</td>
		</tr><tr>
			<td>
				Turma
				<?php

				$servidor = "localhost"; /*maquina a qual o banco de dados está*/
				$usuario = "root"; /*usuario do banco de dados MySql*/
				$senha = ""; /*senha do banco de dados MySql*/
				$banco = "escola"; /*seleciona o banco a ser usado*/
				$conn = mysqli_connect($servidor,$usuario,$senha,$banco); 


				$resc = mysqli_query($conn,"select * from turmas");
			echo " <select name='turma'>";
			echo "<option value=''>----SELECIONE AQUI-----</option>";  
			while($mostrar=mysqli_fetch_assoc($resc)){
     
    echo "<option value=".$mostrar['id_turma'].">". $mostrar['item'] ." | ".$mostrar['curso']. "</option>";
    			}
    echo "</select>"
    ?>
			</td>
			</tr>	
	</table>
		<br>
		<br>
		</fieldset>
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
	$conn = mysqli_connect($servidor,$usuario,$senha,$banco); 

	@$matricula=$_POST['matricula'];
	@$nome=$_POST['nome'];
	@$bairro=$_POST['bairro'];
	@$cpf=$_POST['cpf'];
	@$rg=$_POST['rg'];
	@$cidade=$_POST['city'];
	@$cep=$_POST['cep'];
	@$formacao=$_POST['formacao'];
	@$uf=$_POST['uf'];
	@$inst=$_POST['instituicao'];
	@$area=$_POST['area'];
	@$turma=$_POST['turma'];

	if ($conn->connect_error) {
      die("Connection failed: " . mysqli_connect_error());
}	 
$sql2 = "INSERT INTO professor VALUES(NULL ,'$matricula','$nome','$cpf','$rg','$cidade','$bairro','$uf','$formacao','$area','$inst','$turma')";
	
if ($conn->query($sql2) === TRUE) {
echo "Cadastro realizado com sucesso";
} else {
echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
?>
