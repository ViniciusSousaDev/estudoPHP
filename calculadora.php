<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];

    switch ($oper) {
        case '+': $res = $num1 + $num2; break;
        case '-': $res = $num1 - $num2; break;
        case '*': $res = $num1 * $num2; break;
        case '/': $res = $num2 != 0 ? $num1 / $num2 : "Erro"; break;
        default: $res = "Inválido";
    }
}
?>

<form method="POST">
    <input name="num1" placeholder="Número 1">
    <input name="num2" placeholder="Número 2">
    <select name="oper">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <button>Calcular</button>
</form>

<?php if (isset($res)) echo "Resultado: $res"; ?>
