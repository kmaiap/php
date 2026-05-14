<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
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
        button {
            padding: 10px 20px;
            background-color: #fc86b7;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #ff5ba0;
        }
        .resultado {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            line-height: 1.6;
        }
        span {
            font-weight: bold;
            color: #ff5ba0;
            font-size: 1.2em;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Sorteador de Números</h2>
    
    <form method="POST">
        <button type="submit" name="sortear">Gerar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = [];

        // sortear 6 números únicos entre 01 e 90
        while (count($numeros) < 6) {
            $sorteio = mt_rand(1, 90);
            
            //  não repetir
            if (!in_array($sorteio, $numeros)) {
                // 2 dígitos (01, 02)
                $numeros[] = str_pad($sorteio, 2, "0", STR_PAD_LEFT);
            }
        }
        // ordena os números 
        sort($numeros);

        // transofrma array em uma string separada por " - "
        $resultadoFinal = implode(" - ", $numeros);

        echo "<div class='resultado'>";
        echo "Números sorteados:<br>";
        echo "<span>$resultadoFinal</span>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>