<?php
    $tableauHeures = [];
    for($i = 0; $i < 60; $i++) {
        $tableauHeures[] = [];
        for($j = 0; $j <= 12; $j++) {
            $tableauHeures[$i][] = $j . " : " . $i;
        }
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
            //background-color: cornflowerblue;
            text-align: center;
        }

        table , tr , td , th {
            margin: auto;
            padding: 10px;
            border: 2px solid black;
            border-collapse: collapse;

        }

        td {
            min-width: 60px;
        }
    </style>



</head>
<body>
    <H1>Tableau des heures</H1>
    <table>
      <?php for ($i = 0 ; $i < count($tableauHeures); $i++) { ?>
        <?php if ($i === 0) {?>
                <tr>
                    <?php for ($j = 0 ; $j < 13; $j++) { ?>
                        <th>
                            <?php if($j === 0) continue; ?>
                            <?= ($j-1)." H"; ?> 
                        </th>
                    <?php } ?>
                </tr>
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