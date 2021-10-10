<?php
$titulo = "Login";
include ("include/header.php");
?>
    <h1>Página de login</h1>
    <form action="processarlogin.php" method="POST">
        Usuario: <input type="text" name="usuario" id="usuario" required><br>
        Senha: <input type="password" name="senha" id="senha" required>
        <input type="submit" value="Enviar" class="btn btn-success">
    </form>

    <a href="index.php" class="btn btn-danger">Voltar</a>
<?php
include ("include/footer.php");
?>