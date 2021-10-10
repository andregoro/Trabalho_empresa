<?php
require_once "include/sessao.php";
if(isset($_GET['id'])){
    require_once "../include/config.php";

    $id = $_GET['id'];
   // echo "idcliente: $id";

    $sql = "delete from clientes where id=$id";
    if(mysqli_query($conexao,$sql)){
        echo "Os dados foram apagados com sucesso!";
        echo "<a href='pagina2.php'>Voltar</a>";
    }
        
    else
        echo "houve um erro ".mysqli_errors($conexao);

}
else
    echo "erro, falta o id";



?>