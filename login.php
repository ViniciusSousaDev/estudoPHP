<?php
session_start();

$usuario_correto = "admin";
$senha_correta = "123";

if ($_POST) {
    if ($_POST['user'] == $usuario_correto && $_POST['pass'] == $senha_correta) {
        $_SESSION['logado'] = true;
    } else {
        echo "Login inválido";
    }
}

if (isset($_SESSION['logado'])) {
    echo "Bem-vindo!";
    exit;
}
?>

<form method="POST">
    <input name="user" placeholder="Usuário">
    <input name="pass" type="password" placeholder="Senha">
    <button>Entrar</button>
</form>
