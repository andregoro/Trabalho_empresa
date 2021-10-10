<?php
require_once "include/sessao.php";
if(isset($_POST["idcliente"]) ){
    $id = $_POST["idcliente"];
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];

    require_once "../include/config.php";

    $sql = "update clientes set nome = '$nome' , endereco = '$endereco' where id=$id";
    echo $sql;
    if(mysqli_query($conexao , $sql)){
        echo "Os dados foram atualizados com sucesso!";
        header("location:pagina2.php");
    }
        
    else
        echo "Houve um erro ... ". mysqli_error($conexao);

}
?>