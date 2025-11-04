<?php

require "admin/config.inc.php";


echo "<section class='sobre' style='min-height: 60vh;'>";


echo "<h2>Nossos Clientes</h2>";

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexão, $sql);

if(mysqli_num_rows($resultado) > 0) {
    
    
    echo "<div style='background: #222; border: 1px solid #B87333; color: #fff; padding: 15px; margin-bottom: 15px; border-radius: 5px; max-width: 800px; margin-left: auto; margin-right: auto; text-align: left;'>";

    echo "<h3 style='color: #B87333; margin-top: 0;'>Lista de Clientes</h3>";

    while($dados = mysqli_fetch_array($resultado)) {
        echo "<p>Nome: ".$dados['clientes']. " | Cidade: ".$dados['cidade']. " | Estado: ".$dados['estado']. "</p>";
        echo "<hr style='border-color: #8B4513;'>"; 
    }
    
    echo "</div>"; 

} else {
    echo "<p style='color: #fff; text-align: center;'>Nenhum cliente cadastrado.</p>";
}


echo "</section>";
?>