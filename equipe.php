<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1 id="titreConnexion">Creer ton equipe de 6 !</h1>
    </div>
    
    

    <div id="containerImageEtFrom">
        <div id="containerInscription">
            <h1 id="titreInscription">Equipe</h1>
        </div>
        
        <div id="containerImageDresseur">
            <img id="imageDresseur" src="assets/images/dresseur2.png" alt="dresseur">
        </div>

        
    
    </div>


    <div id="containerPokemon2">
        <?php

            require  'database.php';

            $appeleDeLaFunctionGetPokemon = Database::getPokemon();

            while ($pokemon = $appeleDeLaFunctionGetPokemon->fetch()) {

                echo '<div id="containerImgPokemon2"> 
                <a href="detailsPage.php?id=' . $pokemon['num_poke']. '">
                <img id="imgPokemonEquipe" src="assets/images/'. $pokemon['img_poke'].'">
                </a>
                </div>';
                
            }

        ?>
    </div>
    
    <nav>
        <ul id="containerBoutonRetour">
            <li><a id="BoutonRetour" href="index.php">Revenir au Pokemon</a></li>
        </ul>
    </nav>

</body>
</html>