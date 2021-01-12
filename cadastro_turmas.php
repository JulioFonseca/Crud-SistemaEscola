<?php 
	include("conexao2.php");
	@$nome = $_POST['nome_turma'];
	@$ativo = $_POST['atvs'];  	  
	@$curso = $_POST['curso']; 
	@$turno = $_POST['turno'];  
	@$qtd = $_POST['qtd']; 
	@$vagas = $_POST['vagas']; 

	$sql2="INSERT INTO turmas VALUES (NULL ,'$nome','$ativo','$curso','$turno','$qtd','$vagas')"
	
	if ($conn->query($sql2) === TRUE) {
	echo "Cadastro realizado com sucesso";
	} else {
	echo "Error: " . $sql2 . "<br>" . $conn->error;
	}

$conn->close();
 ?>