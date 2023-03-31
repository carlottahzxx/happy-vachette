<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="../../../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>


<body>

<?php include("../../header/header.php") ?> 


<main>
    <h1>Nouvelle vache<a href="vaches.php"><img src="../../../images/traverser.png" alt="retour"></a>
    </h1>
    
    <section>
        <form action="" method="get">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
            <label for="nom">Type</label>
            <input type="text" name="nom" id="nom" required>
        <input type="submit" value="Ajouter" />
        </form>
    </section>

</main>


</footer>

</body>

</html>