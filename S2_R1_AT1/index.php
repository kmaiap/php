<?php

$nomeEmpresa = "Nexus Inovação Digital";
$slogan = "Transformando ideias em código.";
$anoAtual = 2026;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeEmpresa; ?> - Home</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; }
        header { background-color: #2c3e50; color: white; padding: 40px 20px; text-align: center; }
        main { max-width: 800px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        footer { text-align: center; padding: 20px; color: #7f8c8d; font-size: 0.9em; }
        .destaque { color: #3498db; font-weight: bold; }
    </style>
</head>
<body>

    <header>
        <h1><?php echo $nomeEmpresa; ?></h1>
        <p><em><?php echo $slogan; ?></em></p>
    </header>

    <main>
        <h2>Sobre Nós</h2>
        <p>Bem-vindo à página oficial da <span class="destaque"><?php echo $nomeEmpresa; ?></span>.</p>
        <p>Nossa missão é oferecer as melhores soluções em tecnologia para o seu negócio, unindo eficiência e design moderno.</p>
        
        <h3>Nossos Serviços</h3>
        <ul>
            <li>Desenvolvimento Web</li>
            <li>Consultoria em TI</li>
            <li>Segurança da Informação</li>
        </ul>
    </main>

    <footer>
        <p>
            <?php 
   
                echo "© " . $anoAtual . " " . $nomeEmpresa . " | Todos os direitos reservados."; 
            ?>
        </p>
    </footer>

</body>
</html>