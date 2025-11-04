<?php
require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $especialidade = $_POST['especialidade']; 
} else {
    die("Acesso inválido.");
}


$sql = "INSERT INTO instrutores (nome, especialidade) VALUES ('$nome', '$especialidade')";
$inserir = mysqli_query($conexão, $sql);

if($inserir){
    
    echo "Instrutor cadastrado com sucesso! <a href='?pg=instrutores-admin'>Voltar</a>";
} else {
    echo "Erro ao cadastrar instrutor: " . mysqli_error($conexão);
}
?>