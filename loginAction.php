<?php
session_start();
$usuario = $_POST["Usuario"];
$senha = $_POST["Senha"];
if(empty($usuario)){

$erro .= " Usuario nao infromado ";

}
if(empty($senha)){

$erro .= " Senha nao informada! ";

}

if(empty($erro)){

	$conexao = mysqli_connect("localhost", "root", "humildade100")
        or die("Erro ao conectar ao banco:".mysql_error());

    mysqli_select_db($conexao,"login")
        or die("Erro ao selecionar o database: ".mysql_error());


        $dif = "SELECT usuario, senha FROM usuario";
        $resultado = mysqli_query($conexao,$dif) or die(mysql_error());
        while($dados = mysqli_fetch_array($resultado)){
            if($dados["usuario"] == $usuario){
              if($dados["senha"] == $senha){
									$_SESSION["Usuario"] = $usuario;
									$_SESSION["Senha"] = $senha;
                  $sucesso = "logado com sucesso";
                header("Location:index.php?sucesso=$sucesso");
                exit();
              }
              else{
								unset ($_SESSION["Usuario"]);
				 				unset ($_SESSION["Senha"]);
                $erro="Senha incorreta!";
                header("Location:login.php?erro=$erro");
                exit();
              }

         }

      }
      if($dados["usuario"] != $usuario){
				unset ($_SESSION["Usuario"]);
 				unset ($_SESSION["Senha"]);
        $erro="Usuario nao cadastrado!";
        header("Location:login.php?erro=$erro");
        exit();
      }
}
else {
	unset ($_SESSION["Usuario"]);
	unset ($_SESSION["Senha"]);
  header("Location:login.php?erro=$erro");
  exit();
}
 ?>
