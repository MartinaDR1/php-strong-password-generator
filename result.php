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

    <?php include __DIR__ . '/views/partials/layout/head.php'; ?>

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