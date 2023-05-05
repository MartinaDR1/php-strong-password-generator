<?php 
    session_start();
    include __DIR__ . "/helpers/functions.php";
   
    $passwordLength = $_GET["length"];
    $password = generateRandomPassword($passwordLength);
    $_SESSION["password"] = $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Random password</title>
</head>
<body>
    <div class="container">

        <?php if (!empty($_GET['length'])) : ?>
            <div class="card shadow p-3 mt-5">
                <h6>La tua password casuale è:</h6>
                <p><?php echo $_SESSION["password"] ?> </p>
            </div>
        <?php endif; ?>   
      

    </div>

</body>
</html>