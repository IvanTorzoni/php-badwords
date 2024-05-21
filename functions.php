<?php
//prendo l'informazione del testo inserito 
$text_area = $_GET["text-area"];

//prendo l'informazione della parola censurata inserita
$censor = $_GET["word-censorship"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OUTPUT PAGE</title>

    <!-- style CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section>
        <!-- metto in pagina le informazioni -->
        <h2>Testo inserito dall' utente : <?php echo $text_area; ?></h2>
        <!-- Mostro la lunghezza del testo inserito -->
        <p>Questa stringa è lunga <?php echo strlen($text_area); ?> caratteri </p>
    </section>

    <section>
        <!-- censura nel testo -->
        <?php
        $censor_text = str_replace($censor, "***", $text_area);
        ?>
        <!-- testo censurato -->
        <h2>Testo censurato : <?php echo $censor_text; ?> </h2>
        <!-- Mostro la lunghezza del testo censurato -->
        <p>Questa stringa è lunga <?php echo strlen($censor_text); ?> caratteri </p>
    </section>

</body>

</html>