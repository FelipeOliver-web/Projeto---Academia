<?php

require "config.inc.php"; 

$id = $_REQUEST['id'];  

$sql = "SELECT * FROM clientes WHERE id = $id"; 

$resultado = mysqli_query($conexão, $sql);
if(mysqli_num_rows($resultado) > 0) {
   while($dados = mysqli_fetch_array($resultado)) {
       $cliente = $dados['clientes'];
       $cidade = $dados['cidade'];
       $estado = $dados['estado'];
       $id = $dados['id'];

   }


?>

<form action="?pg=clientes-altera" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="cliente" value="<?php echo $cliente; ?>" required><br><br>
    <label>Cidade:</label>
    <input type="text" name="cidade" value="<?php echo $cidade; ?>" required><br><br>
    <label>Estado:</label>
    <input type="text" name="estado" value="<?php echo $estado; ?>"><br><br>
    <input type="submit" value="Alterar Cliente">
</form>
<?php

} else {
   echo "Cliente não encontrado.";
}

?>