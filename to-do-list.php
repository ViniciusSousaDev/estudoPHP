<?php
session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

if ($_POST) {
    $_SESSION['tarefas'][] = $_POST['tarefa'];
}
?>

<form method="POST">
    <input name="tarefa" placeholder="Nova tarefa">
    <button>Adicionar</button>
</form>

<ul>
<?php foreach ($_SESSION['tarefas'] as $t): ?>
    <li><?= $t ?></li>
<?php endforeach; ?>
</ul>
