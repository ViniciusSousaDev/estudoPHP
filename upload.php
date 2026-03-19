<?php
if ($_FILES) {
    move_uploaded_file($_FILES['arquivo']['tmp_name'], "uploads/" . $_FILES['arquivo']['name']);
    echo "Upload feito!";
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>
