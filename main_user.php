<?php
if(IsSet($_COOKIE["login"])){}
else{
echo"<script language='javascript' type='text/javascript'>alert('Voc� n�o est� conectado');window.location.href='index.php';</script>";
echo '<meta http-equiv="refresh" content="0;url=/">';
exit; 
}

if(isset($_GET['url'])){
  $url=$_GET['url'];
}
else {
  $url="";
}

$url=(empty($url))?"index":$url;


include 'application/controler/Produtos.php';
include 'application/controler/Categorias.php';
include 'application/controler/Retirantes.php';
include 'application/controler/Fornecedores.php';
include 'application/controler/Form.php';
include 'application/controler/Relatorios.php';
include 'application/controler/DB.php';
include 'application/controler/Alunos.php';
?>
<html>
<head>
<title>Controle do Almoxarifado INEP - UFSC</title>
<style type="text/css">
@import url("styles/index.css");
@import url("styles/menu.css");
</style>
<script type="text/javascript" src="application/js/jquery.min.js"></script>
<script type="text/javascript" src="application/js/menu.js"></script>
<script type="text/javascript" src="application/js/functions.js"></script>
</head>
<body>
<div id="Full">
<div id="Logo"><big><b>Controle do Almoxarifado INEP - UFSC</b></big>
</div>
	<div id="Menu">
	<ul id="jsddm">
	<li><a href="main_user.php">Inicio</a>		
	</li>
	<li><a href="#">Equipamentos</a>
		<ul>
			<li><a href="main_user.php?url=produto&acao=listar">Listar Equipamentos</a></li>
			<li><a href="main_user.php?url=categoria&acao=listar">Listar Categorias</a></li>
		</ul>
	</li>
	<li><a href="#">Almoxarifado</a>
		<ul>
			<li><a href="main_user.php?url=estoque&acao=formcadastroentrada">Entrada de Equip.</a></li>
			<li><a href="main_user.php?url=estoque&acao=formcadastrosaida">Saida de Equip.</a></li>
		</ul>
	</li>
	<li><a href="#">Relat�rios</a>
		<ul>
			<li><a href="main_user.php?url=relatorio&acao=entrada">Entrada</a></li>
			<li><a href="main_user.php?url=relatorio&acao=saida">Saida</a></li>
		</ul>
	</li>
	<li><a href="logout.php">logout</a>		
	</li>
	
</ul>
</div>
<div id="Content"><?php include 'application/view/'.$url.'.phtml'; ?></div>
</div>
</body>
</html>
