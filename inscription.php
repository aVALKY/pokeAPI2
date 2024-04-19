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
    <div id="containerButtonConnect">
        <form method="post" action="">
            <input type="submit" name="submit" id="buttonConnect" value="Connexion">
        </form>
        <?php
        if(isset($_POST['submit'])) {
            header("Location: connexion.php");
            exit();
        }
        ?>
    </div>
    
    

    <div id="containerImageEtFrom">
        <div id="containerInscription">
                <h1 id="titreInscription">Inscription</h1>
            <form action="" method="POST">
                <label class="renseignement" for="nom">Nom :</label>
                <input type="text" placeholder="Nom" name="nom" id="nom" required>
                <br>
                <label class="renseignement" for="prenom">Prénom :</label>
                <input type="text" placeholder="Prenom" name="prenom" id="prenom" required>
                <br>
                <label class="renseignement" for="email">E-mail :</label>
                <input type="email" placeholder="toto@gmail.com" name="email" id="email" required>
                <br>
                <label class="renseignement" for="motdepasse">Mot de passe :</label>
                <input type="password" placeholder="******" name="motdepasse" id="motdepasse" required>
                <br>
                <input type="submit" id="inscription" value="S'inscrire">
                
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

        if (isset($_POST['nom'], $_POST ['prenom'], $_POST ['email'], $_POST['motdepasse'])) {

            $sql = "INSERT INTO `dresseurs`( `nom`, `prenom`, `email`,  `motdepasse`) VALUES ( :nom , :prenom , :email, :motdepasse )";

            $requete = $connexion->prepare($sql);

            // Hashage du mot de passe
            $mdpHash = password_hash( $_POST['motdepasse'] , PASSWORD_DEFAULT);
            $requete->execute(array( "nom" => $_POST['nom'] , "prenom" => $_POST['prenom'] , "email" => $_POST['email'] , "motdepasse" => $mdpHash));

        };

    ?>

    <nav>
        <ul id="containerBoutonRetour">
            <li><a id="BoutonRetour" href="index.php">Revenir au Pokemon</a></li>
        </ul>
    </nav>
    
    
    
</body>
</html>