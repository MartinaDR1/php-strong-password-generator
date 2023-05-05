<?php 
    session_start();
    include __DIR__ . "/helpers/functions.php";
   
  /*  $passwordLength = $_GET["length"];
    $password = generateRandomPassword($passwordLength);
    $_SESSION["password"] = $password;

*/
        
    if (!empty($_GET["length"])) {
        $passwordLength = $_GET["length"];
        $characters = "";
        if (!empty($_GET["letters"])) {
            $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        };
        if (!empty($_GET["numbers"])) {
            $characters .= "0123456789";
        };
        if (!empty($_GET["symbols"])) {
            $characters .= "$%&\=?!";
        };
        if(empty($_GET["letters"]) && empty($_GET["numbers"]) && empty($_GET["symbols"])){
            $characters = "'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";
        }
        $password = generateRandomPassword($passwordLength, $characters);
        $_SESSION["password"] = $password;


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Random password</title>
</head>
<body>
    <?php include __DIR__ . '/views/partials/header.php'; ?>

    <div class="container">

        <?php if (!empty($_GET['length'])) : ?>
            <div class="card shadow p-3 mt-5">
                <h6>La tua password casuale è:</h6>
                <p><strong> <?php echo $_SESSION["password"] ?> </strong></p>
            </div>
        <?php endif; ?>   
      

    </div>

</body>
</html>