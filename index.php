<?php

    $passwordLength = $_GET["length"];
    //var_dump($passwordLength);

    include __DIR__ . "./helpers/functions.php"

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container my-3">
        <div class="card shadow p-3">
            <form>
                <div class="mb-3">
                    <label for="length" class="form-label">Indica la lunghezza della password </label>
                    <input type="number" class="form-control" name="length" id="length" placeholder="Inserisci un numero">

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>
            </form>
        </div>

        <?php if (!empty($_GET['length'])) : ?>
            <div class="card shadow p-3 mt-5">
                <h6>La tua password casuale è:</h6>
                <p><?php generateRandomPassword($passwordLength)?> </p>
            </div>
        <?php endif; ?>    
        
    </div>
</body>
</html>