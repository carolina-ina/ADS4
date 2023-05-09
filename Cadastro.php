<?php
session_start();
if(!empty($_SESSION["Usuario"])){
  header("Location:index.php?erro=Você ja esta logado!");
  exit();
}
if(!empty($_GET["erro"])){
?>
<script language="JavaScript">
        alert('<?=$_GET["erro"]?>');
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<form class="box" action="CadastroAction.php" method="post">
  <h1>Cadastro</h1>
  <input type="text" name="Nome" placeholder="Nome">
  <input type="text" name="Usuario" placeholder="Usuario">
  <input type="text" name="Email" placeholder="Email">
  <input type="password" name="Senha" placeholder="Senha">
  <input type="password" name="ConfirmaSenha" placeholder="Repita a senha">
   <input type="submit" name="" value="enviar">
   <div class="red"><li>Caso ja possua cadastro entre com sua conta <a href="login.php">aqui</a>.</li></div>
</form>


  </body>
</html>
