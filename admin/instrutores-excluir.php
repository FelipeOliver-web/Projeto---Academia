<?php
require_once "config.inc.php";

$id = $_GET['id'];
$sql = "DELETE FROM instrutor WHERE id=$id";

if(mysqli_query($conexão, $sql)) {
    echo "instrutor excluído com sucesso! <a href='?pg=instrutores-admin'>Voltar</a>";
} else {
    echo "Erro ao excluir instrutor: " . mysqli_error($conexão);
}
?>
