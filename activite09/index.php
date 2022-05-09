<?php
    $suites = ["♦" , "♣" , "♥" , "♠"];
    $nums = [ 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 , 12 , 13 ];

    for($i = 0 ; $i < count($suites); $i++)
        for($j = 0 ; $j < count($nums) ; $j++)
            $deck[] = $nums[$j] . $suites[$i];

    for($i=0 ; $i < count($deck) ; $i++)
         $i < count($deck) / 2  ? $subdeck1[] = $deck[$i] : $subdeck2[] = $deck[$i];


    for($i = 0 ; $i < 52 ; $i+=2){
        $shuffled_deck[$i] = $subdeck1[($i)/2] ;
        $shuffled_deck[($i)+1]=$subdeck2[($i)/2];
    }


    
?>

<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Résultat</title>
                    <style>
                        body {
                            background-color: burlywood;
                            padding: 50px 5px;
                            font-size: 2em;
                        }
                        table , td , td {
                            margin: auto;
                            border: 2px solid brown;
                            border-collapse: collapse;
                            text-align: center;
                            min-width: 80px;
                        }
                    </style>
                </head>
                <body>
                    <table>
                        <?php for($i = 0; $i < 4; $i++) { ?>
                            <tr>
                                <?php for($j = 0; $j < 13; $j++) { ?>
                                    <td> <?= $shuffled_deck[($j)+(13*$i)]; ?> </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </table>
                </body>
                </html>