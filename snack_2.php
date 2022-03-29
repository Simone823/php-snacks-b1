<!-- 
    Passare come parametri GET name, mail e age 
    e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
    chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso
    negato” 
-->

<?php


    // Se esiste il parametro lo chiedo
    if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        
        // User name
        $user_name = $_GET['name'];

        // User email
        $user_email = $_GET['mail'];

        // User age
        $user_age = $_GET['age'];

    } else {
        echo "Inserire come parametri: name, mail e age";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack_2</title>
</head>
<body>

    <!-- Container -->
    <div class="container">

        <?php 

            // Se user_name è maggiore di 3 e user_email contiene la @ e . e user_age è un numero
            if (strlen($user_name) > 3 && strpos($user_email, '.', -4) && strpos($user_email, '@') && is_numeric($user_age)) {
                ?>
                <h1>Accesso eseguito</h1>;
                <?php
            } else {
                ?>

                <h1>Accesso negato</h1>

                <?php
            }
        
        ?>


    </div>

</body>
</html>