<?php
$nomeEmpresa = "Cyber-Soft Soluções";
$horarioAtual = 14; // Simulando que agora são 14h
$usuarioLogado = "Visitante";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo à <?php echo $nomeEmpresa; ?></title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; background-color: #eef2f3; }
        .painel { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: inline-block; }
        .mensagem { color: #2c3e50; font-size: 1.2em; margin: 10px 0; }
        .footer { margin-top: 20px; font-size: 0.8em; color: #7f8c8d; }
    </style>
</head>
<body>

    <div class="painel">
        <h1>
            <?php 
                echo "Painel Institucional - " . $nomeEmpresa; 
            ?>
        </h1>

        <div class="mensagem">
            <?php 
                if ($horarioAtual < 12) {
                    echo "Bom dia! Esperamos que sua manhã seja produtiva.";
                } else {
                    echo "Boa tarde! Como podemos ajudar sua empresa hoje?";
                }
            ?>
        </div>

        <div class="mensagem">
            <?php 
                echo "Status atual: Conectado como " . $usuarioLogado . "."; 
            ?>
        </div>

        <div class="footer">
            <?php 
                echo "© " . date("Y") . " " . $nomeEmpresa . " - Todos os direitos reservados.";
            ?>
        </div>
    </div>

</body>
</html>