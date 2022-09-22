<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$Celular = filter_input(INPUT_POST,'Celular',FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_STRING);

// echo "Nome: $nome<br>";
// echo "Email: $email<br>";
// echo "Celular: $Celular<br>";
// echo "Telefone: $telefone<br>";
// echo "Mensagem: $mensagem<br>";

$RESULT_USUARIO = "INSERT INTO PESSOA(nome,email,Celular,Telefone,Mensagem) VALUES('$nome','$email','$Celular','$telefone','$mensagem')";

$RESULTADO_USUARIO = mysqli_query($conn,$RESULT_USUARIO);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<div id='erro' class='alert alert-success' role='alert'>
    USUARIO CADASTRADO COM SUCESSO!
  </div>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<div id='erro' class='alert alert-danger' role='alert'>
    Usuario não cadastrado
    </div>";
    header("Location: index.php");
}