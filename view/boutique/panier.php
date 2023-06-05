<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Panier - HV</title>
    <link rel="stylesheet" href="../../css/boutique.css" />
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <script src="../../scripts/form.js"></script>
    <script src="../../scripts/customSubmit.js"></script>
    <script src="../../scripts/adminIns.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>
<body>

<?php include("../header/header.php") ?> 

        <main>
        <h1>Panier</h1>
        <h4> Vous n'avez aucun produit dans votre panier </h4>
        </main>

<?php include("../footer/footer.php"); ?>

</body>

</html>