<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>HV - Vaches</title>
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
    <h1>Vaches</h1>
</main>
<div class="general-div">
<div class="titre_vache">
    Température
</div>
<div class="titre_vache">
    Fréquence cardiaque
</div>
    <div class="titre_vache">
    Taux d'humidité
</div>
</div>
    <div class="flèche"><img src="../../images/angle-gauche.png" alt="flèche gauche">
        <img src="../../images/vachettemimi.png">
        <img src="../../images/angle-droit.png" alt="flèche droite">
        </div>
        <div class="cowbutton">
        <a href="ajouter_vache.php"><button class="buttonaj">Ajouter</button></a>  
        <h3>Vache 1</h3>
        <a href="supprimer_vache.php"><button class="buttonsup">Supprimer</button></a>  </div>


        <?php include("../footer/footer.php"); ?>

</body>

</html>