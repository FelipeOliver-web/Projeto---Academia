<?php

require "admin/config.inc.php"; 


echo "<section class='sobre' style='min-height: 60vh;'>";


echo "<h2>Nossos Instrutores</h2>";

$sql = "SELECT * FROM instrutores"; 
$resultado = mysqli_query($conexão, $sql);

if(mysqli_num_rows($resultado) > 0) {
    
    while($dados = mysqli_fetch_array($resultado)) {
        
        echo "<div style='background: #222; border: 1px solid #B87333; color: #fff; padding: 15px; margin-bottom: 15px; border-radius: 5px; max-width: 800px; margin-left: auto; margin-right: auto; text-align: left;'>";
        
        echo "<h3 style='color: #B87333; margin-top: 0;'>".$dados['nome']."</h3>";
        echo "<p><strong>Especialidade:</strong> " . $dados['especialidade'] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p style='color: #fff; text-align: center;'>Nenhum instrutor cadastrado no momento.</p>";
}


echo "</section>";
?>