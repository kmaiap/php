<?php
/**
 * Desafio: Listagem de Dados de Empresa
 * Cenário: Lista de Funcionários
 */

// 1. Criação do Array Associativo Multidimensional
$funcionarios = [
    [
        "nome" => "Ana Silva",
        "setor" => "Desenvolvimento",
        "cargo" => "Engenheira de Software",
        "email" => "ana.silva@empresa.com"
    ],
    [
        "nome" => "Bruno Costa",
        "setor" => "Design",
        "cargo" => "Designer",
        "email" => "bruno.costa@empresa.com"
    ],
    [
        "nome" => "Carla Souza",
        "setor" => "RH",
        "cargo" => "Analista",
        "email" => "carla.souza@empresa.com"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel da Empresa - Funcionários</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
        .card-container { display: flex; gap: 15px; flex-wrap: wrap; }
        .card { 
            background: white; 
            padding: 15px; 
            border-radius: 8px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 250px;
        }
        h2 { color: #333; }
        p { margin: 5px 0; color: #666; }
        .setor { font-weight: bold; color: #007BFF; }
    </style>
</head>
<body>

    <h1>Lista de Funcionários</h1>

    <div class="card-container">
        <?php 
        // 2. Uso do foreach para percorrer o array
        foreach ($funcionarios as $funcionario): ?>
            <div class="card">
                <h3><?php echo $funcionario['nome']; ?></h3>
                <p class="setor"><?php echo $funcionario['setor']; ?></p>
                <p><strong>Cargo:</strong> <?php echo $funcionario['cargo']; ?></p>
                <p><em><?php echo $funcionario['email']; ?></em></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>