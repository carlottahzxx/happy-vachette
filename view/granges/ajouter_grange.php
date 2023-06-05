<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
    <title>Ajouter Grange - HV</title>
    <link rel="stylesheet" href="../../css/grange.css" />
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


<?php session_start();
    $connected = isset($_SESSION['email']);
?>

<body>
<?php 
    include("../header/header.php");
    echo('
    </header>
    <h1>Ajouter une Grange</h1>
    ');
    require '../../controller/server_grange.php';
?> 
    
    
    <div>
        <form method = "post" id="ajout-grange-form">
            <input type="text" name="nom-grange" placeholder="Nom" required/>
            <input type="text" name="lieu-grange" placeholder="Lieu" required/>
            <button type="submit" name="ajout-grange">Ajouter</button>
        </form>

    </div>


    <?php include("../footer/footer.php") ?> 
</body>
</html>