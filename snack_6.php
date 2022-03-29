<!-- 
    Utilizzare questo array: https://pastebin.com/CkX3680A. 
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
    e i PM in un rettangolo verde. 
-->


<?php 

    // Array
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],

        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack_6</title>

    <style>
        .teachers {
            background-color: gray;
            padding: 10px 15px;
            max-width: 200px;
            margin-bottom: 20px;
        }

        .pm {
            background-color: green;
            padding: 10px 15px;
            max-width: 200px;
        }

        h4, 
        h2 {
            margin: 0;
            margin-bottom: 15px;
            color: white;
        }
    </style>

</head>
<body>

    <!-- Container -->
    <div class="container">

        <!-- Ciclo foreach array db chiave teachers -->
        <div class="teachers">
            <h2>Teachers</h2>
            <?php 
                foreach ($db['teachers'] as $element) {
                    // var_dump($element['name']);
                    ?>

                    <h4> <?php echo $element['name'] ?> <?php echo $element['lastname'] ?> </h4>

                    <?php
                }
                
                ?>
        </div>

        <!-- Ciclo foraech array db chiave pm -->
        <div class="pm">
            <h2>Pm</h2>
            <?php 
                foreach ($db['pm'] as $element) {
                    // var_dump($element['name']);
                    ?>

                    <h4> <?php echo $element['name'] ?> <?php echo $element['lastname'] ?> </h4>

                    <?php
                }
                
            ?>
        </div>    

    </div>

</body>
</html>