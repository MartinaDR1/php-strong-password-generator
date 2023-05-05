<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <?php include __DIR__ . '/views/partials/header.php'; ?>

    <div class="container my-3">
        <div class="card shadow p-5">
            <form method="get" action="result.php">
                <div class="mb-3 d-flex justify-content-between mx-5">
                    <label for="length" class="form-label">Indica la lunghezza della password </label>
                    <input type="number" class="form-control" name="length" id="length" placeholder="Inserisci un numero" style="
                     width: fit-content">

                </div>
                
                <div class="d-flex justify-content-between mx-5">
                    <label for="">Consenti ripetizioni di uno o più caratteri</label>

                    <div class="form px-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="yes" id="yes" checked>
                            <label class="form-check-label" for="yes1">
                                Si
                            </label>
                        </div>
                        <div class="form-check pb-3">
                            <input class="form-check-input" type="radio" name="no" id="no">
                            <label class="form-check-label" for="no2">
                                No
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="letters" value="letters" id="letters">
                            <label class="form-check-label" for="letters">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="numbers" value="numbers" id="numbers">
                            <label class="form-check-label" for="numbers">
                                Numberi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="symbols" value="symbols" id="symbols">
                            <label class="form-check-label" for="symbols">
                                Simboli
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="btn px-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
