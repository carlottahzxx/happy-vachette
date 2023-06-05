<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
    <title>Supprimer Grange - HV</title>
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

    $nom_grange = $_GET['grange'];

?>

<body>

<?php include("../header/header.php");
    echo('
    </header>
    <h1>Supprimer un Collier</h1>
    ');

    require '../../controller/server_collier.php';
    

?> 
    <form method='post' id='suppr-collier-form'>
        <div class='supr-div'>
            <h3>Choisissez le collier à supprimer :</h3>
            <select class='collier-selector' name='selection-collier'>
                    <?php
                        $colliers = requestCollier($db,$nom_grange);
                        foreach($colliers as $col){
                            echo("
                            <option value ='$col'>$col</option>
                            ");
                        }
                    ?>
                    
            </select>
            <button type='submit' name='supprimer-collier'>Supprimer</button>
       
        </div>
    </form>

    <?php include("../footer/footer.php") ?> 
</body>
</html>