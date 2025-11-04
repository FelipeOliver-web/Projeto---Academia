<?php

?>

<section class="cadastro" style="min-height: 60vh;">
    <h2>Fale Conosco</h2>
    <p>Tem alguma dúvida, sugestão ou crítica? Envie sua mensagem para a Fábrica.</p>
    
    <form action="/projeto1/obrigado.html" method="post">
        <input type="text" name="nome" placeholder="Seu nome completo" required>
        <input type="email" name="email" placeholder="Seu e-mail" required>
        
        <textarea name="mensagem" placeholder="Sua mensagem..." required style="width: 280px; height: 120px; padding: 10px; border-radius: 5px; border: none; font-family: Arial, sans-serif;"></textarea>
        
        <button type="submit">Enviar Mensagem</button>
    </form>
</section>