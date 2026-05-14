<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Configurações iniciais
        $minimo = 1621.00;
        $salario = $_GET['sal'] ?? 0;
    ?>


    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário R$</label>
            <input type="number" name="sal" id="sal" step="0.01" value="<?=$salario?>" required>
            
            <p>
                Considerando o salário mínimo de <strong>R$ <?= number_format($minimo, 2, ",", ".") ?></strong>
            </p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Análise do Salário </h2>
        <?php 
            $quantidade = (int) ($salario / $minimo);
            $resto = $salario % $minimo;

            if ($salario > 0) {
                echo "<p>Quem recebe um salário de R$ " . number_format($salario, 2, ",", ".") . " ganha <strong>$quantidade </strong> e sobra  <strong> R$ " . number_format($resto, 2, ",", ".") . "</strong>. </p>";
            } else {
                echo "<p>Informe um valor para calcular.</p>";
            }
        ?>
    </section>

</body>
</html>