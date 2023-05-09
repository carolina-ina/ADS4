<?php
session_start();
if(!empty($_SESSION["Usuario"])){
  header("Location:index.php?erro=Você ja esta logado!");
  exit();
}
if(!empty($_GET["sucesso"])){
?>
<script language="JavaScript">
        alert('<?=$_GET["sucesso"]?>');
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<form class="box" action="loginAction.php" method="post">
  <h1>Login</h1>
  <input type="text" name="Usuario" placeholder="Usuario">
  <input type="password" name="Senha" placeholder="Senha">
   <input type="submit" name="" value="enviar">
   <div class="red"><li>Caso n&atilde;o possua cadastro fa&ccedil;a <a href="Cadastro.php">aqui</a> o seu.</li></div>
</form>


  </body>
</html
