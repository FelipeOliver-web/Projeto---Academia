<?php

require "admin/config.inc.php";


$usuario_admin = "admin";
$senha_admin = "fabrica123"; 

$sql = "INSERT INTO admin_users (usuario, senha) VALUES ('$usuario_admin', '$senha_admin')";

if (mysqli_query($conexão, $sql)) {
    echo "<h1>Administrador (inseguro) criado com sucesso!</h1>";
    echo "<p>Usuário: $usuario_admin</p>";
    echo "<p>Senha: $senha_admin (Visível no banco)</p>";
    echo "<h2>*** APAGUE ESTE ARQUIVO (cria-admin.php) AGORA! ***</h2>";
} else {
    echo "Erro ao criar admin: " . mysqli_error($conexão);
}
?>