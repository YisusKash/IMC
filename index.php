<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>CALCULADORA IMC</h1>


    <form method="post" action="">
        <label for="kg">Peso (Kg)</label>
        <input type="number" step="1" name="kg" required>
        <br>
        <label for="stature">Estatura</label>
        <input type="number" step="0.01" name="stature" required>
        <br>
        <input type="submit" value="Calcular">
        <br>
        <br>
    </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST['kg'];
            $_POST['stature'];

            if (isset($_POST['kg']) && isset($_POST['stature'])) {
                $peso = $_POST['kg'];
                $estatura = $_POST['stature'];
                $imc = $peso / ($estatura * $estatura);
                echo "<p>Tu IMC es: " . number_format($imc, 2) . "</p>";
                if ($imc < 18.5) {
                    echo "<h1>Estás por debajo del peso normal.</h1>";
                } elseif ($imc >= 18.5 && $imc < 24.9) {
                    echo "<p>Tienes un peso normal.</p>";
                } elseif ($imc >= 25 && $imc < 29.9) {
                    echo "<p>Tienes sobrepeso.</p>";
                }elseif ($imc >= 30 && $imc < 34.9) {
                    echo "<p>Tienes obesidad de clase 1.</p>";
                } elseif ($imc >= 35 && $imc < 39.9) {
                    echo "<p>Tienes obesidad de clase 2.</p>";
                }elseif ($imc >= 40) {
                    echo "<h1>Tienes obesidad de clase 3.</h1>";
                }else {
                    echo "<p>Tienes obesidad.</p>";
                }
            }
        }
        ?>             
</body>
</html>