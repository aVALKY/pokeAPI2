<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeAPI</title>
</head>
<body>
    <h1>Pokemon</h1>

    <table>
        <thead>
            <th>img_poke</th>
            <th>Nom</th>
            <th>Taille</th>
            <th>Description</th>
            <th>HP</th>
            <th>Attack</th>
            <th>Defence</th>
            <th>Vitesse</th>
            <th>Attack_spe</th>
            <th>Defence_spe</th>
            <th>Generation</th>
            <th>Version</th>
            <th>Habitat</th>
            <th>Compétence</th>
            <th>Catégorie</th>
        </thead>
    <tbody>
        <?php

            require  'database.php';

            $appeleDeLaFunctionGetPokemon = Database::getPokemon();

            while ($poke = $appeleDeLaFunctionGetPokemon->fetch()) {
              
                echo'<td>'.$poke['nom'].'</td>';
                echo'<td>';
                echo'<td>'.$poke['taille'].'</td>';
                echo'<td>'.$poke['description'].'</td>';
                echo'<td>'.$poke['hp'].'</td>';
                echo'<td>'.$poke['attack'].'</td>';
                echo'<td>'.$poke['defence'].'</td>';
                echo'<td>'.$poke['vitesse'].'</td>';
                echo'<td>'.$poke['attack_spe'].'</td>';
                echo'<td>'.$poke['defence_spe'].'</td>';
                echo'<td>'.$poke['generation'].'</td>';
                echo'<td>'.$poke['img_poke'].'</td>';
                echo'<td>';
                echo'</td>';
            }

        ?>
    </tbody>
</table>


</body>
</html>