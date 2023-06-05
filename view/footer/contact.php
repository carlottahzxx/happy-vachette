<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>HV - Contact</title>
    <link rel="stylesheet" href="../../css/header.css"/>
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../../scripts/adminIns.js"></script>


    <script src="../../scripts/form.js"></script>
    <script src="../../scripts/customSubmit.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>

<body>

<?php include("../header/header.php") ?> 
    <main>
        <h1>Nous contacter</h1>
        <h2>Adresse e-mail:<input type="email"id="email"></h2>
        <label for="question"><h2>Question :</h2></label>
        <textarea id="question" name="adresse" rows="5" cols="25"></textarea><br>
 
        <a class="logo_insta" href="https://www.instagram.com/happyyvachette/"><img src="../../images/instagram.png" alt="instagram"/></p></a>


    </main>
    <?php include("../footer/footer.php"); ?>
</body>
</html>
