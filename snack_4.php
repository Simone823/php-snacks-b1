<!-- 
    Creare un array con 15 numeri casuali, 
    tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta 
-->


<?php 

    // Array numeri 
    $array_numbers = [];

    // Finche il mio array di numeri non è lungo 15 pusho il numero random
    while (count($array_numbers) < 15) {
        
        // Numero intero random
        $number_random = rand(1, 100);
        
        // Se il numero non è incluso lo pusho nell'array_numbers
        if (!in_array($number_random, $array_numbers)) {

            // Pusho il numero random nell'array_numbers
            array_push($array_numbers, $number_random);
        }
    } 

    var_dump($array_numbers);

?>