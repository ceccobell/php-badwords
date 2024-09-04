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
    ?>
</body>
</html>