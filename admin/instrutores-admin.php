<?php
require "config.inc.php";

echo "<p><a href='?pg=instrutores-cadastro-form'>Cadastrar Instrutor</a></p>";
echo "<h3>Lista de Instrutores</h3>";

$sql = "SELECT * FROM instrutores";
$resultado = mysqli_query($conexão, $sql);

while($dados = mysqli_fetch_array($resultado)) {
    echo "ID: ".$dados['id']." | ";
    echo "Nome: ".$dados['nome']." | ";
    echo "Especialidade: ".$dados['especialidade']." | ";
    echo "<a href='?pg=instrutores-altera-form&id=".$dados['id']."'>Alterar</a> | ";
    echo "<a href='?pg=instrutores-excluir&id=".$dados['id']."'>Excluir</a>";
    echo "<hr>";
}
?>
