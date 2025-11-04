<?php

session_start(); 


if (isset($_SESSION['admin_logado']) && $_SESSION['admin_logado'] === true) {
    
    header("Location: admin/index.php"); 
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fábrica de Anões</title>
    
    <link rel="stylesheet" href="style1.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<?php

include_once "topo.php"; 
?>

<main class="container-principal" style="text-align: center;">
    
    <div class="admin-panel" style="max-width: 400px; margin: 40px auto; text-align: left;">
        <h2>Login de Administrador</h2>
        
        <form action="processa-login.php" method="POST">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required style="width: 95%; padding: 8px; margin-bottom: 10px;">
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required style="width: 95%; padding: 8px; margin-bottom: 20px;">
            
            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">
                Entrar
            </button>
        </form>

        <?php
        if (isset($_GET['erro'])) {
            echo '<p style="color: red; margin-top: 15px;">Usuário ou senha inválidos.</p>';
        }
        ?>
    </div>
</main>

<?php

include_once "rodape.php"; 
?>

</body>
</html>