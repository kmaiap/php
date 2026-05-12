<?php
require_once 'config.php';
include 'header.php';
?>

<?php $saboresSelecionados = $_SESSION['sabores'] ?? []; ?>

<div class="container">
    <h1> Sorvete</h1>
    <form method="POST" action="">
        <label>Nome:</label>
        <input type="text" name="usuario" placeholder="Ex: João Silva" value="<?= isset($_SESSION['usuario']) ? htmlspecialchars($_SESSION['usuario']) : '' ?>" required>

        <label>Sabores favoritos:</label>
        <div>
            <label><input type="checkbox" name="sabores[]" value="Chocolate" <?= in_array('Chocolate', $saboresSelecionados, true) ? 'checked' : '' ?>> Chocolate</label>
        </div>
        <div>
            <label><input type="checkbox" name="sabores[]" value="Morango" <?= in_array('Morango', $saboresSelecionados, true) ? 'checked' : '' ?>> Morango</label>
        </div>
        <div>
            <label><input type="checkbox" name="sabores[]" value="Flocos" <?= in_array('Flocos', $saboresSelecionados, true) ? 'checked' : '' ?>> Flocos</label>
        </div>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>