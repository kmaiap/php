<?php

$nomeEmpresa = "Nexus Tech Solutions";

$anoFundacao = 2015;

$avaliacaoMedia = 4.8;

$estaAberta = true;

$endereco = "Av. da Inovação, 1024 - São Paulo/SP";

$idadeEmpresa = 2026 - $anoFundacao;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Corporativo - <?php echo $nomeEmpresa; ?></title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; color: #333; display: flex; justify-content: center; padding-top: 50px; }
        .card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 400px; }
        h1 { color: #0056b3; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .info { margin: 10px 0; font-size: 1.1em; }
        .label { font-weight: bold; color: #555; }
        .status-on { color: green; font-weight: bold; }
        .status-off { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <h1><?php echo $nomeEmpresa; ?></h1>
        
        <p class="info"><span class="label">Fundação:</span> <?php echo $anoFundacao; ?> (<?php echo $idadeEmpresa; ?> anos no mercado)</p>
        
        <p class="info"><span class="label">Endereço:</span> <?php echo $endereco; ?></p>
        
        <p class="info"><span class="label">Avaliação:</span> ⭐ <?php echo $avaliacaoMedia; ?> / 5.0</p>
        
        <p class="info">
            <span class="label">Status de Funcionamento:</span> 
            <?php 
                if ($estaAberta) {
                    echo "<span class='status-on'>Aberta para atendimento</span>";
                } else {
                    echo "<span class='status-off'>Fechada no momento</span>";
                }
            ?>
        </p>
    </div>

</body>
</html>