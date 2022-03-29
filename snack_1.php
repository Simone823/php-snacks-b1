<!-- 
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano- Cantù | 55-60 
-->


<?php
// Array partite
$array_partite = [
    [
        'squadra_casa' => 'Los Angeles Lakes',
        'squadra_ospite' => 'Virtus',
        'punti_casa' => 35,
        'punti_ospite' => 10,
    ],

    [
        'squadra_casa' => 'Chicago Bulls',
        'squadra_ospite' => 'Golden State Warriors',
        'punti_casa' => 30,
        'punti_ospite' => 45,
    ],

    [
        'squadra_casa' => 'New York Knicks',
        'squadra_ospite' => 'Miami Heat',
        'punti_casa' => 22,
        'punti_ospite' => 19,
    ],

    [
        'squadra_casa' => 'Acquila Basket Trento',
        'squadra_ospite' => 'San Antonio Spurs',
        'punti_casa' => 10,
        'punti_ospite' => 30,
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack_1</title>
</head>

<body>

    <!-- Container -->
    <div class="container">

        <!-- Titolo -->
        <h1>Lista partite</h1>

        <!-- Lista partite-->
        <ul class="lista_partite">

            <?php

            // Ciclo for array_partite
            for ($i = 0; $i < count($array_partite); $i++) {
            ?>

                <!-- Partita -->
                <li class="partita">
                    <?php echo $array_partite[$i]['squadra_casa'] ?> - <?php echo $array_partite[$i]['squadra_ospite'] ?> |
                    <?php echo $array_partite[$i]['punti_casa'] ?> - <?php echo $array_partite[$i]['punti_ospite'] ?>
                </li>

            <?php
            }
            ?>

        </ul>

    </div>

</body>

</html>