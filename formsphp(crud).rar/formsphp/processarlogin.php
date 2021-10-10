<?php
if(isset($_POST["usuario"]) && isset($_POST["senha"])) {   
    $user = $_POST["usuario"];
    $pass = $_POST["senha"];
    $pass = md5($pass);

    require_once "include/config.php";
        
    
    $sql  = "SELECT * FROM usuarios where login = '$user' and senha ='$pass'";
    $resultado = mysqli_query($conexao , $sql);

    if(mysqli_num_rows($resultado)==1){
        $dados = mysqli_fetch_array($resultado);
        session_start();
        $_SESSION["id"] = $dados['id'];
        $_SESSION["login"] = $dados['login'];

        //echo "Bem-vindo ".$user;  
        //print_r($_SESSION);
        header("location:/areainterna");
    }
    else
        echo "Usuário ou senha errada";
    
}
?>