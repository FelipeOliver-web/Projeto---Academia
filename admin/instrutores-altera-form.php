<?php
require "config.inc.php";

$id = $_REQUEST['id'];
$sql = "SELECT * FROM instrutores WHERE id = $id";
$resultado = mysqli_query($conexão, $sql);

if(mysqli_num_rows($resultado) > 0) {
    $dados = mysqli_fetch_array($resultado);
    $nome = $dados['nome'];
    
    $especialidade = $dados['especialidade'];
?>
<form action="?pg=instrutores-altera" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>" required><br><br>

    <label>Especialidade:</label>
    <input type="text" name="especialidade" value="<?php echo $especialidade; ?>"><br><br>

    <input type="submit" value="Alterar instrutor">
</form>
<?php
} else {
    echo "instrutor não encontrado.";
}
?>