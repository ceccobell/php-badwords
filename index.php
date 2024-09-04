<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di Censura</title>
</head>
<body>
    <h2>Inserisci il paragrafo e la parola da censurare</h2>
    <form action="" method="GET">
        <label for="paragrafo">Paragrafo:</label><br>
        <textarea name="paragrafo" id="paragrafo" rows="5" cols="40" required></textarea><br><br>

        <label for="parola">Parola da censurare:</label><br>
        <input type="text" name="parola" id="parola" required><br><br>

        <button type="submit">Invia</button>
    </form>
</body>
</html>
