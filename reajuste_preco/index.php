<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário
        $preco = $_GET['preco'] ?? '0';
        $reajuste = $_GET['reajuste'] ?? '0';
    ?>

    <header>
        <h1>Reajustador de Preços</h1>
    </header>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$):</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>" required>

            <label for="reajuste">Percentual de Reajuste (<strong><span id="p">0</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">

            <input type="submit" value="Calcular Reajuste">
        </form>
    </main>

    <?php 
        if (isset($_GET['preco'])) {
            $aumento = ($preco * $reajuste) / 100;
            $novo_preco = $preco + $aumento;
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>
            O produto que custava <strong>R$ <?= number_format($preco, 2, ",", ".") ?></strong>, 
            com um reajuste de <strong><?= $reajuste ?>%</strong>, 
            passará a custar <strong>R$ <?= number_format($novo_preco, 2, ",", ".") ?></strong> a partir de agora.
        </p>
    </section>
    <?php } ?>

    <script>
        // Função para atualizar o texto da porcentagem em tempo real
        function mudaValor() {
            p.innerText = reajuste.value;
        }
        // Chamada inicial para manter o valor caso a página recarregue
        mudaValor();
    </script>
</body>
</html>