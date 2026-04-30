<?php

$metaDiaria = 80; 

$producaoSemana = [85, 90, 75, 82, 95, 0, 0]; // 0 seriam Sábado e Domingo
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Produtividade</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        .dia { border-bottom: 1px solid #ccc; padding: 10px; margin-bottom: 5px; }
        .meta-batida { color: green; font-weight: bold; }
        .meta-nao-batida { color: red; }
        .descanso { color: gray; font-style: italic; }
    </style>
</head>
<body>

    <h1>Relatório Semanal de Produção</h1>

    <?php 

    for ($i = 0; $i < count($producaoSemana); $i++) {
        $diaNumero = $i + 1;
        $quantidade = $producaoSemana[$i];

        echo "<div class='dia'>";
        echo "<strong>Dia $diaNumero:</strong> ";

        // LÓGICA INTEGRADA (IF)
        if ($quantidade == 0) {
            // Se a produção for 0, identificamos como dia de descanso
            echo "<span class='descanso'>Dia de descanso / Sem atividade registrada.</span>";
        } elseif ($quantidade >= $metaDiaria) {
            // Se atingiu a meta de 80
            echo "Produção: $quantidade unidades. <span class='meta-batida'>[Meta Atingida! ✅]</span>";
        } else {
            // Se ficou abaixo da meta
            echo "Produção: $quantidade unidades. <span class='meta-nao-batida'>[Abaixo da meta ⚠️]</span>";
        }

        echo "</div>";
    }
    ?>

</body>
</html>