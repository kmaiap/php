<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Antecessor e Sucessor </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type="number"] {
            padding: 10px;
            width: 100px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .resultado {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            line-height: 1.6;
        }
        span {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Digite o</h2>
    <form method="POST">
        <input type="number" name="numero" placeholder="Ex: 10" required>
        <br>
        <button type="submit">Analisar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['numero'];
        $ante = $num - 1;
        $post = $num + 1;

        echo "<div class='resultado'>";
        echo "Antecessor: <span>$ante</span><br>";
        echo "Número: <span>$num</span><br>";
        echo "Posterior: <span>$post</span>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>