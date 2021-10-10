<?php require_once "include/sessao.php"; ?>
<?php
    require_once "include/header.php";
?>

<h1>Cadastro de clientes</h1>

<form action="addcliente.php" method="POST">
    Nome: <input type="text" name="nome" id="nome"><br>
    Endereço: <input type="text" name="endereco" id="endereco"><br>
    Data: <input type="date" name="data" id="data" value="<?= date('Y-m-d')?>"><br>
    <button type="submit">Enviar</button>
</form>

<?php
    require_once "include/footer.php";
?>