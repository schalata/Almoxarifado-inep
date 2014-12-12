<?
setcookie("login","",time()-1);
?>
<HTML>
<HEAD>
<title>Almoxarifado INEP - UFSC</title>
<style type="text/css">
@import url("styles/index.css");
@import url("styles/menu.css");
</style>
<script type="text/javascript" src="application/js/jquery.min.js"></script>
<script type="text/javascript" src="application/js/menu.js"></script>
<script type="text/javascript" src="application/js/functions.js"></script>
<meta http-equiv="refresh" content="3;url=index.php">
<script language="JavaScript">
  function deleteCookie(nome){
    var exdate = new Date();
    exdate.setTime(exdate.getTime() + (-1 * 24 * 3600 
       * 1000));
    document.cookie = nome + "=" + escape("")+ ((-1 
       == null) ? "" : "; expires=" + exdate);
  } 
</script>

</HEAD>
<BODY>
<div id="Full">
<div id="Logo">Área do Usuário</div>
	<div id="Menu">
	</div>
	<ul id="jsddm">
	<br>
	<br>
	<br>
	<br>
	<center>
	<b> Você foi deslogado, usuário! </b>
<script language="JavaScript">
  deleteCookie("login");
</script>

</BODY>
</HTML>
