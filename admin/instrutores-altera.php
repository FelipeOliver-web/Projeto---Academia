<?php

require_once "config.inc.php";

$id = $_POST['id'];
$nome = $_POST['nome'];

$especialidade = $_POST['especialidade']; 


$sql = "UPDATE instrutores SET nome='$nome', especialidade='$especialidade' WHERE id=$id";

if(mysqli_query($conexão, $sql)) {
    echo "Instrutor alterado com sucesso! <a href='?pg=instrutores-admin'>Voltar</a>";
} else {
    echo "Erro ao alterar instrutor: " . mysqli_error($conexão);
}

?>