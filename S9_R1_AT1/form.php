<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os dados via POST
    $nome     = htmlspecialchars($_POST['nome']);
    $email    = htmlspecialchars($_POST['email']);
    $cep      = htmlspecialchars($_POST['cep']);
    $endereco = htmlspecialchars($_POST['endereco']);

    // Layout da confirmação
    echo "<body style='font-family: sans-serif; background: #f1f5f9; display: flex; justify-content: center; align-items: center; height: 100vh;'>";
    echo "<div style='background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; max-width: 400px;'>";
    
    echo "<div style='color: #22c55e; font-size: 3rem;'>✓</div>";
    echo "<h2 style='color: #0f172a;'>Dados Recebidos!</h2>";
    echo "<p style='color: #64748b;'>Obrigado, <strong>$nome</strong>. Seu cadastro foi processado com sucesso.</p>";
    
    echo "<div style='text-align: left; background: #f8fafc; padding: 15px; border-radius: 8px; margin: 20px 0; font-size: 0.9rem;'>";
    echo "<strong>E-mail:</strong> $email<br>";
    echo "<strong>CEP:</strong> $cep<br>";
    echo "<strong>Endereço:</strong> $endereco";
    echo "</div>";
    
    echo "<a href='index.php' style='text-decoration: none; color: #3b82f6; font-weight: 600;'>Voltar</a>";
    echo "</div></body>";
}
?>