<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>

<form align="center" method="post" >
    <h1>Factorial</h1>
    <input type="number" name="numero" placeholder="Ingresa un numero..." required>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $numero = $_POST["numero"];

    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    $resultado = factorial($numero);
    echo "<center><br> El factorial de $numero es: $resultado";
    }
?>






