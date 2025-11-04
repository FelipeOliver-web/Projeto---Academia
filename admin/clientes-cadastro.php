<?php

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $cliente = $_POST['cliente'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];}
else {
   die("Acesso inválido.");
}
$sql = "INSERT INTO clientes (clientes, cidade, estado) 
      VALUES ('$cliente', '$cidade', '$estado')";

$inserir = mysqli_query($conexão, $sql);

if($inserir){
   echo "Cliente cadastrado com sucesso!";
   echo "<a href='?pg=clientes-admin'>Voltar</a>";
} else {
   echo "Erro ao cadastrar cliente: " . mysqli_error($conexão);
}
?>