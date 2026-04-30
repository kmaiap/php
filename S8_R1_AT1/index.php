<?php
function calcularSalarioLiquido($salarioBruto) {
    $imposto = $salarioBruto * 0.10;
    $liquido = $salarioBruto - $imposto;
    return $liquido; 
}

function exibirPerfil($nome, $cargo, $salarioFinal) {
    echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; font-family: sans-serif;'>";
    echo "<strong>Colaborador:</strong> $nome <br>";
    echo "<strong>Cargo:</strong> $cargo <br>";
    echo "<strong>Salário Líquido (com 10% desc.):</strong> R$ " . number_format($salarioFinal, 2, ',', '.');
    echo "</div>";
}


echo "<h1>Painel Administrativo - RH</h1>";

$funcionarios = [
    ["nome" => "Ana Silva", "cargo" => "Desenvolvedora", "salario" => 5000],
    ["nome" => "Bruno Souza", "cargo" => "Designer", "salario" => 4000],
    ["nome" => "Carla Dias", "cargo" => "Gerente", "salario" => 8000]
];

foreach ($funcionarios as $f) {
    $valorFinal = calcularSalarioLiquido($f['salario']);
    
    exibirPerfil($f['nome'], $f['cargo'], $valorFinal);
}
?>