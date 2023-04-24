<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Granges - HV</title>
    <link rel="stylesheet" href="../../../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>


<body>

    <header>
    <?php include("../../header/header.php") ?> 


    </header>

<main>
    <h1>Granges</h1>
<div class="pasdinspi">
    <div class="titre_vache">
    Taux de CO2
</div>
<div class="titre_vache">
    Niveau sonore
</div>
</div>
    <div class="flèche"><img src="../../../images/angle-gauche.png" alt="flèche gauche">
        <img class="grange"src="../../../images/grange.jpg" alt="grange">
        <img src="../../../images/angle-droit.png" alt="flèche droite">
        </div>
        <div class="cowbutton">
        <a href="ajouter_grange.php"><button type="button">Ajouter</button></a>  
        <h3>Grange 1</h3>
        <a href="supprimer_grange.php"><button type="button">Supprimer</button></a>  </div>
</main>

<?php include("../../footer/footer.php"); ?>


</body>

</html>