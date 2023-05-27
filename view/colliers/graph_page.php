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


    <script>
        function drawChart(date,valeur,typeCapteur){
            const id = 'myChart'+typeCapteur.toString();
            const can = document.getElementById(id);
            const labels = date;
            var titre = "";

            if(typeCapteur ===1){
                titre = "Rythme Cardiaque";
            }else if(typeCapteur === 2){
                titre = "Température";
            }else if(typeCapteur === 3){
                titre = "Niveau Sonore";
            }else if(typeCapteur === 2){
                titre = "CO2";
            }


            const data = {
            labels: labels,
            datasets: [{
                label: titre,
                data: valeur,
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
                }]
            };

            const config = {
                type: 'line',
                data: data,
            };

            new Chart(can,config);
        }

    </script>
    
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);
    require "../colliers/graph_element.php";


    $id_collier = 0;
    if(isset($_GET['collier'])){
        $id_collier = $_GET['collier'];
    }


?>

<body>

<?php 
    include("../header/header.php");
?> 
<h1>Visualisation data</h1>
<div>

    <?php 
    graph($db,1,$id_collier);
    graph($db,2,$id_collier);
    graph($db,3,$id_collier);
    graph($db,4,$id_collier);
    ?>
</div>  

<?php include("../footer/footer.php"); ?>

</body>

</html>