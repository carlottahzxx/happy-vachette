<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>HV - Vaches</title>
    <link rel="stylesheet" href="../../css/infos.css" />
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
</head>
<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>
<body>

<?php include("../header/header.php") ?> 

<div class="titre">Mon profil</div>

<a class="logo-modif"><img src="../../images/edit.png "alt="logo-modif">

<form>
    <div>
        <label for="name">Nom :</label><input type="text" id="name">
    </div>
    <div>
        <label for="name">Prénom :</label><input type="text" id="name">
    </div>
    <div>
        <label for="mail">Adresse mail :</label><input type="text" id="name">
    </div>
    <div>
        <label for="statut">Statut :</label><input type="text" id="statut">
    </div>
    <div class="button">
        <button type="submit">Enregistrer</button>
    </div>
</form>

<?php include("../footer/footer.php"); ?>

</body>

</html>