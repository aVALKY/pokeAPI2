<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeAPI</title>
</head>
<body>
    <h1>Pokemon</h1>
</body>


<table>
    <tbody>
        <?php

            require  'database.php';

            $stock = Database::getPokemon();

            while ($poke = $stock->fetch()) {
              
                echo'<tr>';
                echo'<td>'.$poke['nom'].'</td>';
                echo'<td>'.$poke['taille'].'</td>';
                echo'<td>'.$poke['description'].'</td>';
                echo'<td>'.$poke['masse'].'</td>';
                echo'<td>'.$poke['hp'].'</td>';
                echo'<td>'.$poke['attack'].'</td>';
                echo'<td>'.$poke['defence'].'</td>';
                echo'<td>'.$poke['vitesse'].'</td>';
                echo'<td>'.$poke['attack_spe'].'</td>';
                echo'<td>'.$poke['defence_spe'].'</td>';
                echo'<td>'.$poke['img_poke'].'</td>';
                echo'<td>'.$poke['generation'].'</td>';
                echo'<td>';
                echo'</td>';
                echo'</tr>';

            }

        ?>
    </tbody>
</table>

</html>