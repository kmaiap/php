<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Tema</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: <?= $tema === 'dark' ? '#1a1a1a' : '#ffffff' ?>;
            color: <?= $tema === 'dark' ? '#ffffff' : '#333333' ?>;
            transition: background 0.5s ease, color 0.5s ease;
        }

        .topbar {
            padding: 16px;
            background: <?= $tema === 'dark' ? '#111' : '#f0f0f0' ?>;
            text-align: center;
        }

        .topbar a {
            color: <?= $tema === 'dark' ? '#fff' : '#333' ?>;
            text-decoration: none;
            margin: 0 10px;
        }

        .container {
            max-width: 720px;
            margin: 30px auto;
            padding: 24px;
            background: <?= $tema === 'dark' ? '#222' : '#f9f9f9' ?>;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        input, select, button {
            width: 100%;
            max-width: 100%;
            padding: 12px;
            margin-top: 6px;
            margin-bottom: 16px;
            border-radius: 6px;
            border: 1px solid <?= $tema === 'dark' ? '#555' : '#ccc' ?>;
            background: <?= $tema === 'dark' ? '#333' : '#fff' ?>;
            color: <?= $tema === 'dark' ? '#fff' : '#000' ?>;
        }

        button {
            cursor: pointer;
            background: <?= $tema === 'dark' ? '#4f8cff' : '#0077cc' ?>;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <header class="topbar">
        <a href="index.php">Configurações</a>
        <a href="perfil.php">Perfil</a>
        <a href="?toggle_tema=<?= $tema === 'dark' ? 'light' : 'dark' ?>">
            <?= $tema === 'dark' ? 'Modo Claro' : 'Modo Escuro' ?>
        </a>
    </header>