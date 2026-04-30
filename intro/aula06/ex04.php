<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv php</title>
</head>
<body>
    <div class= "container">
        <h1>Exemplo 4</h1>
        <p>números pares de 1 a 10.</p>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "$i é par <br>";
            }
        }
        ?>
    </div>
</body>
</html>