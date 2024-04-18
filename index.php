<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeAPI</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="containerImgTitle">
        <img id="imgTitle" src="assets/pokemonpng.png" alt="imgPokemon">
    </div>

    <div id="containerPokemon">
        <?php

            require  'database.php';

            $appeleDeLaFunctionGetPokemon = Database::getPokemon();

            while ($pokemon = $appeleDeLaFunctionGetPokemon->fetch()) {

                echo '<div id="containerImgPokemon">
                <a href="detailsPage.php?id=' . $pokemon['num_poke']. '">
                <img src="assets/images/'. $pokemon['img_poke'].'">
                </a>
                </div>';
                



                // echo'<td>'.$poke['nom'].'</td>';
                // echo'<td>'.$poke['taille'].'</td>';
                // echo'<td>'.$poke['description'].'</td>';
                // echo'<td>'.$poke['hp'].'</td>';
                // echo'<td>'.$poke['attack'].'</td>';
                // echo'<td>'.$poke['defence'].'</td>';
                // echo'<td>'.$poke['vitesse'].'</td>';
                // echo'<td>'.$poke['attack_spe'].'</td>';
                // echo'<td>'.$poke['defence_spe'].'</td>';
                // echo'<td>'.$poke['generation'].'</td>';
                // echo'<td>'.$poke['img_poke'].'</td>';
                // echo'<td>';
                // echo'</td>';
            }

        ?>
    </div>
</body>
</html>