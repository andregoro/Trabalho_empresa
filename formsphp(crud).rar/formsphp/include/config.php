<?php
//conexão com a base de dados para verificar o usuário
$servidor = "localhost";
$usuario = "root";
$senha = "";
$basedados =  "dbteste";

$conexao = mysqli_connect($servidor,$usuario, $senha, $basedados);

if(mysqli_connect_error()){
    die("Houve um erro ... ".mysqli_connect_error());
}
?>