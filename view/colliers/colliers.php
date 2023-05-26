<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Colliers - HV</title>
    <link rel="stylesheet" href="../../css/colliers.css" />
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../../scripts/form.js"></script>
    <script src="../../scripts/customSubmit.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>

<body>

<?php include("../header/header.php") ?> 

    </header>

<main>
    <h1>Colliers</h1>
</main>

<div class="flèche"><img src="../../images/angle-gauche.png" alt="flèche gauche">
        <img src="../../images/collier.webp">
        <img src="../../images/angle-droit.png" alt="flèche droite">
        </div>
        <div class="cowbutton">
        <a href="ajouter_collier.php"><button type="button">Ajouter</button></a>  
        <h3>Collier 1</h3>
        <a href="supprimer_collier.php"><button type="button">Supprimer</button></a>  
</div>


<?php include("../footer/footer.php"); ?>




</body>

</html>