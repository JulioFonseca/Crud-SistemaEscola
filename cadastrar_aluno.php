<?php 

$servidor = "localhost"; /*maquina a qual o banco de dados está*/
$usuario = "root"; /*usuario do banco de dados MySql*/
$senha = ""; /*senha do banco de dados MySql*/
$banco = "escola"; /*seleciona o banco a ser usado*/
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
	@$cidade = $_POST['cidade']; 
	@$bairro = $_POST['bairro']; 
	@$oferta = $_POST['oferta']; 

	

	//calculo das vagas
$res = mysqli_query($conn,"select * from turmas WHERE id_turma = $oferta");
	while($escrever=mysqli_fetch_assoc($res)){
	
	@$qtdV = 0;
	@$qtdV = ($escrever['vagas']-1);
}

	 
	 //Check connection
if ($conn->connect_error) {
      die("Connection failed: " . mysqli_connect_error());
}	 
$sql = "INSERT INTO aluno VALUES(NULL ,'$oferta','$ano','$matricula','$nome','$cidade','$bairro','$sexo','$nascimento','$mae','$pai','$responsavel','$fone_resp','$celular','$email','$nascionalidade','$pais')";

$sql2 = "UPDATE turmas SET vagas=".intval($qtdV)." WHERE id_turma = '$oferta'";
	
if ((mysqli_query($conn, $sql)) && (mysqli_query($conn, $sql2))) {
		      echo "Cadastro realizado com sucesso";
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}
	
mysqli_close($conn);
?>