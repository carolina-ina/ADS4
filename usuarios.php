<?php
session_start();
if(empty($_SESSION["Usuario"])){
  header("Location:index.php?erro=Você precisa estar logado!");
  exit();
}
else{
    $conexao = mysqli_connect("localhost", "root", "senac")
        or die("Erro ao conectar ao banco:".mysql_error());

    mysqli_select_db($conexao,"login")
        or die("Erro ao selecionar o database: ".mysql_error());


        $dif = "SELECT * FROM usuario";
        $resultado = mysqli_query($conexao,$dif) or die(mysql_error());

      }
      

?>
<html>
<head>
<title>USUÁRIOS CADASTRADOS</title>
</head>
<body>
    <h1>Usuários Cadastrados</h1>
<table>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Usuario</th>
            <th colspan = 2>Ação</th>
        </tr>
        <?php while($dados = mysqli_fetch_array($resultado)){ ?>
        <tr>
            <td><?php echo $dados['usuario_id']; ?></td>  
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
            <td><?php echo $dados['usuario']; ?></td>
            <td><input type = 'submit' name = 'exclui' value = "Excluir"></td>
            <td><input type = 'submit' name = 'edita' value = "Editar"></td>
        </tr>
<?php } ?>
        </table>
        </html>