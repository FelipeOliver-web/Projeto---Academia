<?php

require_once "config.inc.php";

$id = $_REQUEST['id'];
$nome = $_POST['cliente'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


$sql = "UPDATE clientes SET clientes='$nome', cidade='$cidade', estado='$estado' WHERE id=$id";

if ($resultado = mysqli_query($conexão, $sql)) {
    echo "Cliente alterado com sucesso!";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
} else {
    echo "Erro ao alterar cliente: " . mysqli_error($conexão);
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}


?>