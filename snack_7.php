<!-- 
    Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. 
-->


<?php 

    // Array alunni
    $array_alunni = [
        [
            'name' => 'Luca',
            'lastname' => 'Gigi',
            'voti' => [
                10,
                6,
                8,
                9,
                7
            ], 
        ],

        [
            'name' => 'Matteo',
            'lastname' => 'Brazorf',
            'voti' => [
                5,
                8,
                6.5,
                7.6,
                9
            ], 
        ],

        [
            'name' => 'Giacomo',
            'lastname' => 'Paletta',
            'voti' => [
                4.5,
                7.8,
                8,
                8.2,
                10
            ], 
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack_7</title>
</head>
<body>

    <!-- Container -->
    <div class="container">

    <!-- Ciclo foreach array_alunni -->
    <?php 
        foreach($array_alunni as $element) {

            ?>

            <h4> <?php echo $element['name'] ?> <?php echo $element['lastname'] ?> </h4>

            <?php

                // Ciclo for voti
                for ($i = 0; $i < count($element['voti']); $i++ ) {

                    // Voti
                    $voti = $element['voti'];

                    // Somma voti
                    $somma_voti = array_sum($voti);

                    // Media voti
                    $media_voti = $somma_voti / count($element['voti']);
                    
                    // Arrotondo media voti
                    $round_media_voti = round($media_voti);
                }

                ?>

                <p> <?php echo $round_media_voti; ?> </p>

                <?php

            ?>

            <?php
        }

    ?>


    </div>
    
</body>
</html>