<?php
require_once "include/sessao.php";
if(isset($_POST["nome"]) ){
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $data = date('Y-m-d', strtotime($_POST["data"]));

    //echo "$nome <br>";
    //echo "$endereco <br>";
    //echo "$data <br>";

    require_once "../include/config.php";

    $sql = "insert into clientes(nome, endereco, data_cadastro) values('$nome', '$endereco','$data')";
    if(mysqli_query($conexao , $sql)){
        echo "Os dados foram inseridos com sucesso!";
        header("location:pagina2.php");
    }
        
    else
        echo "Houve um erro ... ". mysqli_error($conexao);

}
?>