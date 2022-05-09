<?php
date_default_timezone_set('America/Toronto');
$heureAct = date("H");
$minutAct = date("i");
    $tableauHeures = [];
    for($i = 0; $i < 60; $i++) {
        $tableauHeures[] = [];
        for($j = 0; $j < 12; $j++) {
            $tableauHeures[$i][] = " ";
        }
    }

    if (12 < $heureAct) $heureAct -= 12;
    $tableauHeures[$minutAct][$heureAct-1] = "X";

    for($i = 0; $i < $minutAct; $i++) {
        $tableauHeures[$i][$heureAct-1] = "↓";
    }
    if($heureAct !== 1)
        for($j = 0; $j < $heureAct; $j++) {
            $tableauHeures[$minutAct][$j-1] = "→";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 - Heure Actuelle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="menu">
        <a href="index.php">Page Accueil</a>
        <a href="heureActuelle.php">Heure Actuelle</a>
    </nav>
    <main>
        <h1>Heure actuelle</h1>
        <h4>Le temp actuelle est: <?= ($heureAct+1)." : ".$minutAct."<br>"; ?></h4>

        <table>
            <?php for ($i = 0 ; $i < count($tableauHeures); $i++) { ?>
                <?php if ($i === 0) {?>
                   <thead>
                       <?php for ($j = 0 ; $j < 13; $j++) { ?>
                           <th class="rangH">
                               <?php if($j === 0) continue; ?>
                               <?= ($j)." H"; ?> 
                            </th>
                        <?php } ?>
                    </thaed>
                <?php } ?>
                <tr>
                    <?php for ($j = 0 ; $j < 12; $j++) { ?>
                        <?php if ($j === 0) {?>
                            <th class="ColumM"> <?= $i ." M"; ?> </th>
                        <?php } ?>
                        <td> <?= $tableauHeures[$i][$j]; ?> </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </main>
</body>
</html>