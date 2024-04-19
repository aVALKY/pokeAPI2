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
        <h1 id="titreConnexion">Connecte toi pour creer ton equipe de 6 !</h1>
    </div>
    
    

    <div id="containerImageEtFrom">
        <div id="containerInscription">
                <h1 id="titreInscription">connexion</h1>
        <form action="" method="POST">
            <label class="renseignement" for="email">Email :</label>
            <input type="email" name="email" id ="email">
            <br>
            <br>
            <label class="renseignement" for="motdepasse">Mot de passe :</label>
            <input type="password" name="motdepasse" id="motdepasse">
            <br>
            <br>
            <input type="submit" name="submit" id="styleGo" value="GO">
        </form>
        
        </div>
        
        <div id="containerImageDresseur">
            <img id="imageDresseur" src="assets/images/dresseur.png" alt="dresseur">
        </div>
            
    </div>

    

    <?php

        session_start();
        require 'database.php';
        $connexion = Database::connect();

        if(isset($_POST["email"] , $_POST["motdepasse"])){
            

            $sql = "SELECT * FROM `dresseurs` WHERE `email` LIKE :email ";
            $requete = $connexion->prepare($sql);

            $requete->execute(array("email" => $_POST["email"] ) );
            // on récupère le premier résultat
            $resultat = $requete->fetch();

            if ($resultat != false){
                // on verifie le mot de passe
                $mdpHash = $resultat['motdepasse'];
                if (password_verify( $_POST['motdepasse'], $mdpHash)) {
                    echo 'Le mot de passe est valide ! [GOOD]';
                    header('Location: equipe.php ');
                } else {
                    echo ' Le mot de passe est invalide ! [BAD].';
                    
                }

            } else {
            echo 'Votre adresse Email est inconnue'; 
            }

        }
    ?>

    <nav>
        <ul id="containerBoutonRetour">
            <li><a id="BoutonRetour" href="index.php">Revenir au Pokemon</a></li>
        </ul>
    </nav>
    
    
    
</body>
</html>