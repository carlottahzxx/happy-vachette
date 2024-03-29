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
    <script src="../../scripts/faq.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);
?>

<body>

<?php 
    include("../header/header.php");
    require "../../controller/server_faq.php";
    if(!$connected){
        echo "<p class='erreur_connexion'>Veuillez vous connecter ou créer un compte pour poser une question</p>";
        include("../footer/footer.php");
        exit();
    }else{
        $email = $_SESSION['email'];
    }

?> 


    
    <main>
        <h1>Nous contacter</h1>
        <form method='post' onsubmit='success()'>
            <p class='success-message' id ='success-message'></p>
            <label for="question"><h2>Question :</h2></label>
            <textarea class='textarea' id="question" name="question" rows="5" cols="25"></textarea>
            <button type='submit' name="send">Envoyer</button>
        </form>

        <a class="logo_insta" href="https://www.instagram.com/happyyvachette/"><img src="../../images/instagram.png" alt="instagram"/></p></a>

    </main>
    <?php include("../footer/footer.php"); ?>
</body>
</html>
