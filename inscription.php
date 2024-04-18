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

    <nav>
        <ul id="containerBoutonRetour">
            <li><a id="BoutonRetour" href="index.php">Revenir au Pokemon</a></li>
        </ul>
    </nav>
    
    
    
</body>
</html>