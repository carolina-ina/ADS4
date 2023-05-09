<?php
$email = $_POST["Email"];
$nome = $_POST["Nome"];
$usuario = $_POST["Usuario"];
$senha = $_POST["Senha"];
$confirmaSenha = $_POST["ConfirmaSenha"];
$sucesso = "Cadastro concluido com sucesso!";



if(empty($email)){

$erro .= " Email nao informado, ";

}
if(empty($nome)){

$erro .= " Nome nao informado, ";

}
if(empty($usuario)){

$erro .= " Usuario nao infromado, ";

}
if(empty($senha)){

$erro .= " Senha nao informada, ";

}
if(empty($confirmaSenha)){

$erro .= " Senha nao informada, ";

}
if($senha != $confirmaSenha){

$erro .= " As senhas precisam ser identicas ";

}


if(empty($erro)){

	$conexao = mysqli_connect("localhost", "root", "humildade100")
        or die("Erro ao conectar ao banco:".mysql_error());

    mysqli_select_db($conexao,"login")
        or die("Erro ao selecionar o database: ".mysql_error());


        $dif = "SELECT email, usuario FROM usuario";
        $resultado = mysqli_query($conexao,$dif) or die(mysql_error());
        while($dados = mysqli_fetch_array($resultado)){
            if($dados["email"] == $email){
            $erro = "Email ja cadastrado";
             header("Location:Cadastro.php?erro=$erro");
                exit();
            }
            if($dados["usuario"] == $usuario){
            $erro = "Usuario ja cadastrado";
             header("Location:Cadastro.php?erro=$erro");
                exit();
            }
        }
if(empty($erro)){
    $sql = "INSERT INTO usuario (nome, usuario, email, senha) ";
    $sql .= "VALUES('$nome', '$usuario', '$email', '$senha')";

    mysqli_query($conexao,$sql)
        or die("Erro no SQL: ".mysql_error());

    mysqli_close();
    header("Location:login.php?sucesso=$sucesso");
    exit();
}
}else{

    header("Location:Cadastro.php?erro=$erro");
    exit();

}

 ?>
