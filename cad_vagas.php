<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>vagas</title>

</head>
<body>
	<?php include('menu.php'); ?>
	<style type="text/css">
		#h3{
	color: #EED8AE;
	}
	</style>
<h3 id="h3">Matriculas >> Incluir Oferta de Vagas</h3>
<form method="post" action="cad_vagas.php">
	<br>
	
<table align="center" border="0"  width="1000px" cellspacing="20">
	<tr>
	<td>Ativos?</td> 
	<td>
	 <input type="radio" name="atvs" value="sim" checked> Sim
  <input type="radio" name="atvs" value="nao"> Não
  </td>
	</tr>
	<tr>
	<td>Ano:</td> <td><select style="width: 80px" name="ano">
		<?php for ($i=2016; $i <=2018 ; $i++) { 
							echo"<option>$i</option>"; } 
								?>
	</select></td></tr><br>
	<tr><td>Item: </td><td><?php  

	$servidor = "localhost"; /*maquina a qual o banco de dados está*/
	$usuario = "root"; /*usuario do banco de dados MySql*/
	$senha = ""; /*senha do banco de dados MySql*/
	$banco = "escola"; /*seleciona o banco a ser usado*/
	$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

		$resc = mysqli_query($conexao,"select * from turmas");
			echo " <select name='item'>";
			while($mostrar=mysqli_fetch_assoc($resc)){
      
    echo "<option> Integrado 1 serie | Ensino Medio | Profissional - ". $mostrar['nome_turma'] . "</option>";
    echo "<option> Integrado 2 serie | Ensino Medio | Profissional - ". $mostrar['nome_turma'] . "</option>";
    echo "<option> Integrado 3 serie | Ensino Medio | Profissional - ". $mostrar['nome_turma'] . "</option>";

  } 

  	echo "</select></td>";
		?>
		</td></tr><br>
	<tr>
	<td>Curso:</td><td><select style="width: 1000px" name="curso">
		<option>TECNICO EM INFORMATICA</option>
		<option>TECNICO EM FINANCAS</option>
		<option>TECNICO EM MODA</option>
		<option>TECNICO EM ENFERMAGEM</option>
	</select></td></tr><br>
	<tr>
	<td>Turno:</td><td><select style="width: 1000px" name="turno">
		<option>Integral</option>
		<option>Manha</option>
		<option>Tarde</option>
		<option>Noite</option>
	</select></td></tr><br>
	<tr>
	<td>Qtd.turmas:</td><td><input type="number" value="0" name="qtd"></td></tr><br>
<tr>
	<td>Vagas ofertadas:</td><td><input type="number" name="vagas" min="1"></td></tr>
	</table>
		<div align="center">
		<input type="submit" value="Incluir" >
		<input type="submit" value="Consultar" >
</div>
</form>
</body>
</html>
<?php 	
	@$ativo =$_POST['atvs'];
	@$item = $_POST['item'];
	@$curso =$_POST['curso'];
	@$turno =$_POST['turno'];
	@$qtd_turmas =$_POST['qtd'];
	@$vagas =$_POST['vagas'];
	
@$letra = explode(" - ",$item)[1];
$sla13 = "SELECT id_turma from turmas where nome_turma ='$letra' ";
$exe = $conexao->query($sla13) or die($conexao->error);
while($sla1 = $exe ->fetch_assoc()){
$idturma = $sla1["id_turma"];
}
if (!$conexao) {
      die("Connection failed: " . mysqli_connect_error());
}
	$item2 =explode(" - ",$item)[0];
		@$sql2 = "UPDATE turmas SET ativo= '$ativo', curso= '$curso', turno = '$turno', qtd_turmas= '$qtd_turmas',vagas= '$vagas', item= '$item2' WHERE id_turma = '$idturma'";
		if (mysqli_query($conexao, $sql2)) {
		      echo "Cadastro realizado com sucesso";
		} else {
		      echo "Error: " . $sql2 . "<br>" . mysqli_error($conexao);
		}
	
mysqli_close($conexao);
 ?>
	