<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Fábrica de Anões</title> 
    
    <link rel="stylesheet" href="style1.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php 
        
        include_once "topo.php";
    ?>

    <main>
    <?php
        
        if(empty($_SERVER["QUERY_STRING"])){
            $var = "conteudo";
            include_once "$var.php";
        } elseif(isset($_GET['pg'])){
            $pg = $_GET["pg"];
            
            
            $paginas_permitidas = [
                'instrutores',
                'clientes',
                'faleconosco'
            ];

            
            if(in_array($pg, $paginas_permitidas)){
                
                include "$pg.php";
            } else {
                
                echo "Página não encontrada";
            }
            

        } else {
            echo "Página não encontrada";
        }
    ?>
    </main>

    <?php
        
        include_once "rodape.php";
    ?>

</body>
</html>