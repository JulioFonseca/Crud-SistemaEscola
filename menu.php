<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html  xml:lang="pt" lang="pt">
 
<head>
	<title>Menu Horizontal</title>
	<style type="text/css">
 	
	.menu{
margin: 0;
padding: 0;
}
.menu ul{ 
list-style: none;
}
.menu li{
width: 180px;
height: auto; 
padding: 0;
margin: 0;
position: relative;
border-bottom: #999999 1px inset;
}
.menu li ul{
width: 180px;
height: auto;
padding: 0;
margin: 0;
border-left: #CCCCCC 1px inset;
display: none;
position: absolute;
left: 180px;
top: 0;
}
.menu a{
display: block;
text-decoration: none;
padding: 7px;
background-color: #666666;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
font-weight: 400;
color: #FFFFFF;
}
.menu a:hover{
background-color: #999999;
text-decoration: none;
color: #FFFFFF;
}

/* hack para o IE não criar margens\*/ 
* html ul li { float: left; height: 1%; } 
* html ul li a { height: 1%; } 
/*End */ 

.menu li:hover ul, li.over ul{
display: block;
}

 
</style>
 
 
 
 
<ul class="menu">
<li><a href="#">Cadastro</a>
	<ul>
<li><a href="cad_alunos.php">Aluno</a></li>
<li><a href="cad_turma.php">turma</a><ul><li><a href="cad_vagas.php">Vagas</a></li></ul></li>
<li><a href="cad_prof.php">professor</a></li>
<li><a href="cad_notas.php">notas</a></li>
<li><a href="cad_disciplina.php">disciplina</a></li>
</ul>
</li>
<li><a href="#">Consultar</a>
<ul>
<li><a href="con_aluno.php">Aluno</a></li>
<li><a href="con_turmas.php">turma</a><ul><li><a href="consu_aluno.php">Alunos da turma</a></li></ul></li>
<li><a href="consu_prof.php">professor</a></li>
<li><a href="con_notas.php">notas</a></li>
<li><a href="con_disciplina.php">disciplina</a></li>
</ul>
</li>
<li><a href="#">Alterar</a>
<ul>
<li><a href="alt_aluno.php">Aluno</a></li>
<li><a href="Alterar_notas.php">notas</a></li>
</ul>
</li>
</ul>
	</div>
</body>
</html>