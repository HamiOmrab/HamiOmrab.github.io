<?php
date_default_timezone_set('America/Toronto');
$heureAct = date("H")-1;
$minutAct = date("i");
    $tableauHeures = [];
    for($i = 0; $i < 60; $i++) {
        $tableauHeures[] = [];
        for($j = 0; $j < 12; $j++) {
            $tableauHeures[$i][] = $j+1 . " : " . $i;
        }
    }

    if (12 <= $heureAct) $heureAct -= 12;
    $tableauHeures[$minutAct][$heureAct] = "X";

    for($i = 0; $i < $minutAct; $i++) {
        $tableauHeures[$i][$heureAct] = "↓";
    }
    for($j = 0; $j < $heureAct; $j++) {
        $tableauHeures[$minutAct][$j] = "→";
    }

     /*  
<?php  ?>
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travail pratique 3</title>
    <style>

body {
            text-align: center;
            background-color: wheat;
            color: brown;
            font-size: 2em;
        }

        table , tr , td , th {
            margin: auto;
            padding: 10px;
            text-align: center;
            border: 2px solid black;
            border-collapse: collapse;
        }

        td {
            min-width: 60px;
        }

        button {
            margin: 40px;
            padding: 5px 20px;
            min-height: 50px;
            box-shadow: 5px 5px;
            border: none;
        }

        button:hover {
            color: white;
            background-color: blue;
            transition-duration: .6s;
        }
    </style>



</head>
<body>
    <H1>Tableau des heures</H1>
    <span>Le temp actuelle est: <?= $heureAct." : ".$minutAct."<br>"; ?></span>
    <button>Cliquez pour trouver heure actuelle</button>
    <table>
        <?php for ($i = 0 ; $i < count($tableauHeures); $i++) { ?>
            <?php if ($i === 0) {?>
               <thead>
                   <?php for ($j = 0 ; $j < 13; $j++) { ?>
                       <th>
                           <?php if($j === 0) continue; ?>
                           <?= ($j)." H"; ?> 
                        </th>
                    <?php } ?>
                </thaed>
            <?php } ?>
            <tr>
                <?php for ($j = 0 ; $j < 12; $j++) { ?>
                    <?php if ($j === 0) {?>
                        <th> <?= $i ." M"; ?> </th>
                    <?php } ?>
                    <td> <?= $tableauHeures[$i][$j]; ?> </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>