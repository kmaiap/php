<?php
session_start();

// Detecta alternância de tema pelo link de toggle
if (isset($_GET['toggle_tema']) && in_array($_GET['toggle_tema'], ['light', 'dark'], true)) {
    $tema_escolhido = $_GET['toggle_tema'];
    setcookie('tema_preferido', $tema_escolhido, time() + (86400 * 30), '/');
    $_COOKIE['tema_preferido'] = $tema_escolhido;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['usuario'])) {
        $_SESSION['usuario'] = htmlspecialchars($_POST['usuario']);
    }

    if (!empty($_POST['sabores']) && is_array($_POST['sabores'])) {
        $_SESSION['sabores'] = array_map('htmlspecialchars', $_POST['sabores']);
    } else {
        $_SESSION['sabores'] = [];
    }

    if (!empty($_POST['tema']) && in_array($_POST['tema'], ['light', 'dark'], true)) {
        $tema_escolhido = $_POST['tema'];
        setcookie('tema_preferido', $tema_escolhido, time() + (86400 * 30), '/');
        $_COOKIE['tema_preferido'] = $tema_escolhido;
    }
}

$tema = isset($_COOKIE['tema_preferido']) ? $_COOKIE['tema_preferido'] : 'light';
?>