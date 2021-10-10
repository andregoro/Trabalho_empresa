<?php
if(isset($_POST["usuario"]) && isset($_POST["senha"])) {
    $user = $_POST["usuario"];
    $pass = $_POST["senha"];

    //$pass = md5($pass);

    include "config.php";

    $sql2="SELECT * FROM funcionario where login ='$user' and senha ='$pass'";
    $resultado = mysqli_query($conexao , $sql2);

    if(mysqli_num_rows($resultado)==1){
        $dados = mysqli_fetch_array($resultado);
        session_start();
        $_SESSION["idFuncionario"] = $dados['idFuncionario'];
        $_SESSION["login"] = $dados['login'];

        // echo "Bem-vindo ".$user;
        // echo "<br> ".$sexo;
        // print_r($_SESSION);
        header("location:cliente.php");
    }
    else
        echo "Usuário ou senha errada";

}
?>