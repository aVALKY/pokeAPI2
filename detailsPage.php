<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleDetailsPage.css">
</head>
<body>
    <header>
        <nav>
            <ul id="containerBoutonRetour">
                <li><a id="BoutonRetour" href="index.php">Revenir au Pokemon</a></li>
            </ul>
        </nav>
    </header>

<div>


    <?php

        session_start();

        $id_page = $_GET['id'];


        require  'database.php';

        
        $recupererLesInfosPokemon = Database::getPokemonById($id_page);

        while ($pokemon = $recupererLesInfosPokemon->fetch()) {
            echo '<div id="containerImgPokemon">';
            echo '<div id="containerInfoPokemon">';
            echo '<p class="infosPokemonText">Generation : '.$pokemon['generation']. '</p>';
            echo '<p id="nomPokemon">' . $pokemon['nom'] . '</p>';
            echo '<p class="infosPokemonText">Taille : ' . $pokemon['taille'] . '</p>';
            echo '<p class="infosPokemonText">Description : '.$pokemon['description']. '</p>';
            echo '<p class="infosPokemonText">HP : '.$pokemon['hp']. '</p>';
            echo '<p class="infosPokemonText">Attaque : '.$pokemon['attack']. '</p>';
            echo '<p class="infosPokemonText">Defense : '.$pokemon['defence']. '</p>';
            echo '<p class="infosPokemonText">Vitesse : '.$pokemon['vitesse']. '</p>';
            echo '<p class="infosPokemonText">Attaque Special : '.$pokemon['attack_spe']. '</p>';
            echo '<p class="infosPokemonText">Defense Special : '.$pokemon['defence_spe']. '</p>';
            echo '</div>';
            echo '<img src="assets/images/'. $pokemon['img_poke']. '">'; // Afficher l'image du Pokémon
            echo '</div>';
        }


            
        // $id_page = $_GET['id'];
        // $db = Database::connect();

        // // Pokémon précédent
        // $sql_precedent = "SELECT * FROM pokemon WHERE num_poke < :id ORDER BY num_poke LIMIT 1";
        // $stmt_precedent = $db->prepare($sql_precedent);
        // $stmt_precedent->bindParam(':id', $id_page);
        // $stmt_precedent->execute();
        // $id_precedent = $stmt_precedent->fetchColumn();

        // // Pokémon suivant
        // $sql_suivant = "SELECT * FROM pokemon WHERE num_poke > :id ORDER BY num_poke LIMIT 1";
        // $stmt_suivant = $db->prepare($sql_suivant);
        // $stmt_suivant->bindParam(':id', $id_page);
        // $stmt_suivant->execute();
        // $id_suivant = $stmt_suivant->fetchColumn();


    ?>

</div>

</body>
</html>

