<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo - Fábrica de Anões</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4; }
        h1 { color: #333; }
        
       
        nav { background: #8B4513; padding: 10px; border-radius: 5px; }
        
        nav a { color: white; padding: 10px; text-decoration: none; font-weight: bold; }
        
        
        nav a:hover { background: #B87333; color: #fff; }
        
        .content { margin-top: 20px; padding: 20px; background: white; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <h1>Painel Administrativo</h1>

    <nav> 
        <a href="?pg=clientes-admin">Gerenciar Clientes</a> 
        <a href="?pg=instrutores-admin">Gerenciar Instrutores</a> 
    </nav>

    <div class="content">
    <?php
        
        require "config.inc.php";

        
        if(isset($_GET['pg'])){
            $pg = $_GET["pg"];

            
            if(file_exists("$pg.php")){
                include "$pg.php";
            } else {
                echo "Página não encontrada";
            }
        } else {
            echo "<p>Bem-vindo ao painel. Selecione uma opção acima.</p>";
        }
    ?>
    </div>

</body>
</html>