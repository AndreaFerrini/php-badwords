<?php

$testo = $_GET["testo"];
$censure = $_GET["censure"];

$stringaModificata = str_replace("$censure", "****", $testo);

echo strlen($stringa)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura php</title>
</head>
<body>
    
    <h1>Il testo inserito è:</h1>
    <p><?php echo $testo?></p>
    <h4>Lunghezza testo: <?php echo strlen($testo)?></h4>

    <h1>Il nuovo testo censurato è:</h1>
    <p><?php echo $stringaModificata ?></p>
    <h4>Lunghezza testo: <?php echo strlen($stringaModificata)?></h4>

</body>
</html>