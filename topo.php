<?php

?>
<header class="topo">
    
    <div class="logo">
        <a href="index.php">
            <img src="images/anao.jpeg" alt="Logo Fábrica de Anões">
        </a>
    </div>

    <nav class="nav-menu">
        <a href="index.php">Home</a>
        <a href="?pg=instrutores">Instrutores</a> 
        <a href="?pg=clientes">Clientes</a> 
        <a href="?pg=faleconosco">Contatos</a>

        <?php  ?>
        <?php if (isset($_SESSION['admin_logado']) && $_SESSION['admin_logado'] === true): ?>
            <a href="?pg=instrutores-admin" style="color: #FFC72C;"><b>PAINEL ADMIN</b></a>
        <?php endif; ?>
    </nav>

    <div class="acoes">
        <?php 
        if (isset($_SESSION['admin_logado']) && $_SESSION['admin_logado'] === true): ?>
            <span>Olá, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</span>
            <a href="logout.php">Sair</a>
        <?php else: ?>
            <a href="login.php">Entrar</a>
        <?php endif; ?>
    </div>

</header>