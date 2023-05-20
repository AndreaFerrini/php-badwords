<?php

$name = "Andrea";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1>Ciao mi chiamo <?php echo $name ?> e qui puoi scrivere il tuo testo con le parole da censurare</h1>

    <form action="censura.php" method="GET">
  
        <div class="m-4">
            <label for="exampleFormControlTextarea1" class="form-label">Scegli una parola da censurare</label>
            <input class="form-control form-control-lg" type="text" placeholder="..." aria-label=".form-control-lg example" name="testo">
        </div>

        <div class="m-4">
            <label for="exampleFormControlTextarea1" class="form-label">Scegli una parola da censurare</label>
            <input class="form-control form-control-lg" type="text" placeholder="..." aria-label=".form-control-lg example" name="censure">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-outline-success text-center">Invia dati</button>
        </div>


    </form>

</body>
</html>