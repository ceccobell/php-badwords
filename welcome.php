<?php
    $paragrafo = $_GET['paragrafo'];
    $parola = $_GET['parola'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Censurato</title>
</head>
<body>
    <?php
        echo "<p>$paragrafo</p>";
        $lunghezza = strlen($paragrafo);
        echo "<p>Lunghezza: $lunghezza caratteri</p>";

        $paragrafoCensurato = str_replace($parola, '***', $paragrafo);

        echo "<h2>paragrafo censurato:</h2>";
        echo "<p>$paragrafoCensurato</p>";
    ?>
</body>
</html>