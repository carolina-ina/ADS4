<?php
session_start();
if(!empty($_GET["sucesso"])){
?>
<script language="JavaScript">
        alert('<?=$_GET["sucesso"]?>');
</script>
<?php
}


if(!empty($_GET["erro"])){
?>
<script language="JavaScript">
        alert('<?=$_GET["erro"]?>');
</script>
<?php
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>SISTEMA DE GERENCIAMENTO DE FUNCIONÁRIOS - SGDF</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link href="0950\style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
  <div class="navigation">
	  <a href="index.php" title="inicio">Página Inicial</a>
    <a href="usuarios.php" title="usuarios">Usuários</a>
  </div>
  <h1>Inicio</h1>
<br/><br/>
<br/><br/>

<?php

if (!empty($_SESSION["Usuario"])) {
    ?> <div class="Ususario">
      <li>Logado como: <?=$_SESSION["Usuario"]?></li>
      <br>
      <a href="logoff.php?sessao=<?=$_SESSION["Usuario"]?>">Sair</a>
    </div>
    <?php
}else{?>
    <li>Usuario nao logado</li>
    <a href="login.php"> Fazer login</a>
<?php
}
?>

</div>
<div class="footer"> &copy; SISTEMA DE GERENCIAMENTO DE FUNCIONÁRIOS - SGDF  </div>

</html>
