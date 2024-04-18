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

        <nav>
            <ul id="containerBoutonRetour">
                <li><a id="BoutonRetour" href="inscription.php">Creer ton equipe de 6 !</a></li>
            </ul>
        </nav>

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
                
            }

        ?>
    </div>
</body>
</html>