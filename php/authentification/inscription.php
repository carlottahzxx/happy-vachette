<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>


<body>
    <main>
        <h1>
            INSCRIPTION
            <a href="../pages/general/index.php"><img src="../../images/traverser.png" alt="retour"></a>

        </h1>
        
    <section>
        <form action="" method="get">
            <label for="prenom">Votre prénom</label>
            <input type="text" name="prenom" id="prenom" required>
            <label for="nom">Votre nom</label>
            <input type="text" name="nom" id="nom" required>
            <label for="email">Votre email</label>
            <input type="email" name="email" id="email" required>
            <label for="motdepasse">Votre mot de passe</label>
            <input type="password" name="motdepasse" id="motdepasse" required>
            <label for="checkbox">J'accepte les <a class = "inscription-text" href="../pages/general/CGU.php">CGU</a> </label>
            <input id="checkbox" name="checkbox" type="checkbox" required>
        <input type="submit" value="S'inscrire" />
        </form>
    </section>
<section>Déjà un compte ? 
        <a href="connexion.php">Connectez-vous</a> 
</section>
    </main>
</body>
</html>
