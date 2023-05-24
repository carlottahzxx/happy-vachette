<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
    <title>Ajouter Colliers - HV</title>
    <link rel="stylesheet" href="../../../css/style.css" />
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

<?php include("../../header/header.php");    
    require __DIR__ . '/server_collier.php';
    $nom_granges = request_granges($email,$db);

?> 
    </header>
    <h1>Ajouter un collier</h1>
    
    <div>
        <form>
            <select id="grange" name="choose-grange">
                <?php 
                    foreach($nom_granges as $nom){
                        echo("<option value='$nom'>$nom</option>");
                    }
                ?>
            
        </form>

    </div>


    <?php include("../../footer/footer.php") ?> 
</body>
</html>