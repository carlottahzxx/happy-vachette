<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="../../css/vache.css" />
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../../authentification/form.js"></script>
    <script src="../../authentification/customSubmit.js"></script>
    <script src="../../scripts/adminIns.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>

<body>

<?php include("../header/header.php") ?> 


<main>
    <h1>Nouvelle vache
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

<?php include("../footer/footer.php"); ?>

</body>

</html>