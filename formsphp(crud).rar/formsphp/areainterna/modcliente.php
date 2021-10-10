<?php 
require_once "include/sessao.php"; 
if(!isset($_GET["id"]))
    die("Variável id não foi identificada");

require_once "../include/config.php";

$id = $_GET["id"];
$sql = "select * from clientes where id=$id";
$nome="";
$endereco="";

$resultado = mysqli_query($conexao , $sql);
if(mysqli_num_rows($resultado)>0){
    $dados = mysqli_fetch_array($resultado);
    $nome = $dados['nome'];
    $endereco = $dados['endereco'];
}

?>

<h2>Atualizar dados do cliente</h2>

<form action="modcliente2.php" method="POST">
    Nome: <input type="text" name="nome" id="nome" value="<?=$nome?>"><br>
    Endereço: <input type="text" name="endereco" id="endereco" value="<?=$endereco?>"><br>
    <input type="hidden" name="idcliente" value="<?=$id?>">
    <button type="submit">Enviar</button>
</form>
