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
    if($connected){
        $email = $_SESSION['email'];
        $name = $_SESSION['firstName'] ;
        $familyName = $_SESSION['familyName'];

    }

?>
<body>

<?php include("../header/header.php");
    require_once '../../controller/server_faq.php';
    require_once '../../controller/server_info.php';

    $admin = isAdmin($db,$email);
    if($admin){
        $type = "administrateur";
    }else{
        $type = "client";
    }
?> 

<div class="titre">Mon profil</div>


<form class='formulaire' method='post'>
    <div class='general-div'>
        <div class='input-elem'>
            <label for="name">Nom :</label>
            <?php
                echo("
                <input type='text' name='famille' value='$familyName'/>
                ");
            ?>
        </div>
        <div class='input-elem'>
            <label for="name">Prénom :</label>
            <?php
                echo("
                <input type='text' name='prenom' value='$name'/>
                ");
            ?>
        </div>
        <div class='input-elem'>
            <label for="mail">Adresse mail :</label>
            <?php
                echo("
                <input type='text' name='email' value='$email' readonly/>
                ");
            ?>
        </div>
        <div class='input-elem'>
            <label for="statut">Statut :</label>
            <?php
            echo("
            <input type='text' value='$type' readonly/>
            ");
            ?>
        </div>
        <div class="button">
            <button type="submit" name="enregistrer">Enregistrer</button>
        </div>
    </div>
</form>

<?php include("../footer/footer.php"); ?>

</body>

</html>