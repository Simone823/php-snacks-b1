<!-- 
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. 
-->

<?php 

    // Paragrafo 
    $text = "
        Lorem ipsum dolor sit amet. consectetur adipisci elit. sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim 
        veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure 
        reprehenderit in voluptate velit esse. cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident. sunt in 
        culpa qui officia deserunt. mollit anim id est laborum.
    ";

    // Array testo splittato dopo . e spazio
    $text_split = explode(". ", $text);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack_5</title>
</head>
<body>

    <!-- Container -->
    <div class="container">

        <!-- Titolo -->
        <h1>Paragrafo</h1>
        <!-- Paragrafo -->
        <p> <?php echo $text; ?></p>

        <!-- Titolo -->
        <h1>Paragrafo splittato dopo . e spazio</h1>

        <!-- Ciclo for $text_split -->
        <?php 
        
        for ($i = 0; $i < count($text_split); $i++ ) {
            ?>
            <!-- Paragrafo splittato -->
            <p> <?php echo $text_split[$i] ?> </p>
            <?php
        }

        ?>

    </div>

</body>
</html>