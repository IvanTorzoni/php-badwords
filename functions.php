<?php
//prendo l'informazione dall' imput
$test = $_GET["test"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OUTPUT PAGE</title>
</head>
<body>
    <!-- metto in pagina le informazioni -->
    <h1>Testo utente : <?php echo $test; ?></h1>
</body>
</html>