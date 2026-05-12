<?php
require_once 'config.php';
include 'header.php';
?>

<div class="container">
    <h2>Dados </h2>
    <?php if (isset($_SESSION['usuario'])): ?>
        <p>Olá, <strong><?= htmlspecialchars($_SESSION['usuario']) ?></strong>!</p>
        <p>Seus sabores favoritos de sorvete são:</p>
        <?php if (!empty($_SESSION['sabores'])): ?>
            <ul>
                <?php foreach ($_SESSION['sabores'] as $sabor): ?>
                    <li><?= htmlspecialchars($sabor) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p><em>Nenhum sabor selecionado.</em></p>
        <?php endif; ?>
    <?php else: ?>
        <p>Nenhum usuário identificado. <a href="index.php">Volte e preencha o formulário.</a></p>
    <?php endif; ?>
</div>

</body>
</html>