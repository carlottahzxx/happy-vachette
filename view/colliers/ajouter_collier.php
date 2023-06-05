<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
    <title>Ajouter Colliers - HV</title>
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
    <script src="../../scripts/adminIns.js"></script>
</head>


<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>

<body>

<?php include("../header/header.php");
    echo('
    </header>
    <h1>Ajouter un collier</h1>
    ');
    require "../../controller/server_collier.php";
    $nom_granges = request_granges($email,$db);

?> 
    
    
    <div>
        <form method = "post" id="ajout-collier-form">
            <select id="grange" name="selected-grange" required>
                <?php 
                    foreach($nom_granges as $nom){
                        echo("<option value='$nom'>$nom</option>");
                    }
                ?>
            </select>
            <input type = "number" placeholder="Numéro du collier" name="id-collier" required></input>
            <button type="submit" name="ajout-collier">Ajouter</button>
        </form>

    </div>


    <?php include("../footer/footer.php") ?> 
</body>
</html>