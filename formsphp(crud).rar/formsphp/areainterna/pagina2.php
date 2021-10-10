<?php 
require_once "include/sessao.php"; 
require_once "../include/config.php";
require_once "include/header.php";
?>

<h1>Listagem de clientes</h1>
<?php
    require_once "include/menu.php";

$sql = "select * from clientes";
$resultado = mysqli_query($conexao , $sql);
?>
<table class="table">
<tr><th>ID</th><th>Nome</th><th>Endereço</th><th>Ações</th></tr>
<?php
if(mysqli_num_rows($resultado)>0){
    while($dado = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$dado['id']."</td>". "<td>".$dado['nome']."</td>". "<td>".$dado['endereco']."</td>";
        echo "<td><a href='modcliente.php?id=".$dado['id']."' class='btn btn-success'>Modificar</a>";
        echo  " - <a href='remcliente.php?id=".$dado['id']."' class='btn btn-danger'>Remover</a></td>";
        echo "</tr>";
    }
}

?>
</table>

<?php
    require_once "include/footer.php";
?>