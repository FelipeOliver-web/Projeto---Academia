<?php

session_start();
require "admin/config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conexão, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexão, $_POST['senha']); 

    
    $sql = "SELECT * FROM admin_users WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = mysqli_query($conexão, $sql);

    if ($resultado && mysqli_num_rows($resultado) == 1) {
        
        $_SESSION['admin_logado'] = true;
        $_SESSION['usuario_nome'] = $usuario;
        header("Location: index.php?pg=instrutores-admin"); 
        exit;
    }
    
    
    header("Location: login.php?erro=1");
    exit;
}
?>