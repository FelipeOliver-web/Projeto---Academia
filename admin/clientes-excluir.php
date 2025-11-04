<?php

require_once "config.inc.php";

$id = $_GET['id'];
$sql = "DELETE FROM clientes WHERE id=$id";

if (mysqli_query($conexão, $sql)) {
    echo "Cliente excluído com sucesso!";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
} else {
    echo "Erro ao excluir cliente: " . mysqli_error($conexão);
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}

?>