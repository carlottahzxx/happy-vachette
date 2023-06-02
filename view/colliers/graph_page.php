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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../scripts/chartMaker.js"></script>
    
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);
    require "../colliers/graph_element.php";
    require "../../controller/server_capteur.php";


    $id_collier = 0;
    if(isset($_GET['collier'])){
        $id_collier = $_GET['collier'];
    }

    date_default_timezone_set('Europe/Paris');
    $timeEnd = new DateTime();
    $timeStart = $timeEnd->modify('-1 day');
    
    $timeEnd = new DateTime();
    $timeEnd = $timeEnd->format("Y-m-d h:i");
    $timeStart = $timeStart->format("Y-m-d h:i");

    $timeStart1 = $timeStart;
    $timeEnd1 = $timeEnd;

    $timeStart2 = $timeStart;
    $timeEnd2 = $timeEnd;

    $timeStart3 = $timeStart;
    $timeEnd3 = $timeEnd;

    $timeStart4 = $timeStart;
    $timeEnd4 = $timeEnd;

    if(isset($_GET['timeStart1'])){
        $timeStart1 = $_GET['timeStart1'];
        $timeEnd1 = $_GET['timeEnd1'];
    }
    if(isset($_GET['timeStart2'])){
        $timeStart2 = $_GET['timeStart2'];
        $timeEnd2 = $_GET['timeEnd2'];
    }
    if(isset($_GET['timeStart3'])){
        $timeStart3 = $_GET['timeStart3'];
        $timeEnd3 = $_GET['timeEnd3'];
    }
    if(isset($_GET['timeStart4'])){
        $timeStart4 = $_GET['timeStart4'];
        $timeEnd4 = $_GET['timeEnd4'];
    }


?>

<body>

<?php 
    include("../header/header.php");
?> 
<h1>Visualisation data</h1>
<div class='all-charts'>
    <?php
    if(urlPermission($db,$id_collier,$email)){
        graph($db,1,$id_collier,$timeStart1,$timeEnd1);
        graph($db,2,$id_collier,$timeStart2,$timeEnd2);
        graph($db,3,$id_collier,$timeStart3,$timeEnd3);
        graph($db,4,$id_collier,$timeStart4,$timeEnd4);
    }else{
        echo("<p>Vous n'avez pas la permission pour acceder à ces données</p>");
    }
    
    ?>
</div>  

<?php include("../footer/footer.php"); ?>

</body>

</html>