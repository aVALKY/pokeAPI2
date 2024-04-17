<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

    session_start();

    $id_page = $_GET['id'];


    require  'database.php';

    
    $recupererLesInfosPokemon = Database::getPokemonById($id_page);

        while ($pokemon = $recupererLesInfosPokemon->fetch()) {

            echo '<div id="containerImgPokemon">
            <img src="assets/images/'. $pokemon['img_poke'].'">
            </div>';
        }


?>

</body>
</html>

