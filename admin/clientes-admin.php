<?php

require "config.inc.php";

echo "<p><a href='?pg=clientes-cadastro-form'>Cadastrar cliente</a></p>";
echo "<h3>lista de clientes</h3>";

$sql = "SELECT * FROM clientes";

$resultado = mysqli_query($conexão, $sql);

while($dados = mysqli_fetch_array($resultado)) {
   echo "id: ".$dados['id']. " | ";
    echo "clientes: ".$dados['clientes']. " | ";
    echo "cidade: ".$dados['cidade']. " | ";
    echo "estado: ".$dados['estado']. "<br>";
    echo "<a href='?pg=clientes-altera-form&id=".$dados['id']."'>Alterar</a> | ";
    echo "<a href='?pg=clientes-excluir&id=".$dados['id']."'>Excluir</a>";
    echo "<hr>";
}

?>