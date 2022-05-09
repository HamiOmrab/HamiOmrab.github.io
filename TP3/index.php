<?php
    $tableauHeures = [];
    for($i = 0; $i < 60; $i++) {
        $tableauHeures[] = [];
        for($j = 0; $j < 12; $j++) {
            $tableauHeures[$i][] = $j+1 . " : " . $i;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travail pratique 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="menu">
        <a href="index.php">Page Accueil</a>
        <a href="heureActuelle.php">Heure Actuelle</a>
    </nav>
    <main>
        <h1>Travail pratique 3</h1>
        <h3>Environnement de développement Web 1</h3>
        <h5>Hamid Omranabasi - N: e2295313 - Groupe:21647 </h5>
        <p>Il y a le tableau des heures; Si vous allez à la page «Heure actuelle» vous pourez voir l'heure d'actuelle</p>
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