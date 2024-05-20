<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INPUT PAGE</title>

    <!-- style CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section>
        <h1>Si prega di inserire un testo</h1>
        <!-- Form -->
        <form action="functions.php" method="get">
            <!-- Text area per inserimento dati utente -->
            <textarea name="text-area" placeholder="inserire testo" aria-label="Inserire testo"></textarea>
            <!-- /Text area per inserimento dati utente -->

            <!-- Input per inserimento parola da censurare -->
            <input type="text" name="word-censorship" placeholder="inserire la parola da censurare" aria-label="Inserire parola da censurare">
            <!-- /Input per inserimento parola da censurare -->

            <!-- Bottone per invio dati\ -->
            <button type="submit">Invia</button>
        </form>
    </section>
    <!-- /Form -->
</body>

</html>