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
    <script src="../../scripts/grangeSelector.js"></script>
    
</head>

<?php

    function displayList($db,$nom_grange,$email){
        $colliers = getGrangeCollier($db,$nom_grange,getUserId($db,$email));
        foreach($colliers as $col){
            $id = $col['IdCollier'];
            echo("<a class='collier-elem-div' href='../colliers/graph_page.php?collier=$id'>");
            //collierElement($numero,$img,$nom_vache,$heart,$temp,$sound,$co2)
            collierElement($col['IdCollier'],"vachette.jpg","Nom de la Vache","80 bpm","38 °C","78 dB","200 ppm");
            echo("</a>");
        }
        if(count($colliers) == 0){
            echo('<p>Cette grange ne contient aucun collier</p>');
        }

    }

    session_start();

    $connected = isset($_SESSION['email']);

    $nom_grange = '';
    if(isset($_GET['grange'])){
        $nom_grange = $_GET['grange'];
    }
    

?>

<body>

<?php 
    include("../header/header.php");
    require '../../controller/server_grange.php';
    require '../colliers/collier_element.php';
    require '../../controller/server_collier.php';
    require '../../controller/server_capteur.php';

?> 


</header>

<h1>Colliers</h1>
    <div>
        <a href="ajouter_collier.php"><button type="button">Ajouter</button></a>  
        
        <a href="supprimer_collier.php"><button type="button">Supprimer</button></a>  
    </div>

    <div class='grange-selector-div'>
        

        <h3>Grange : </h3>

        <select class='grange-selector' id="grange-selector" onchange="updateCollier()">
            <?php
                $granges  = grangesRequest($db,getUserId($db,$email));
                foreach($granges as $g){
                    $nom_g = $g['Nom'];
                    if($nom_g ==$nom_grange){
                        echo("
                        <option value ='$nom_g' selected='selected'>$nom_g</option>
                        ");
                    }else{
                        echo("
                        <option value ='$nom_g'>$nom_g</option>
                        ");
                    }
                    
                    if($nom_grange==""){
                        $nom_grange = $nom_g;
                    }

                }
            ?>
            
        </select>

    
    
    </div>

    <div class='collier-list-div'>
        <?php
            displayList($db,$nom_grange,$email);
        ?>

    </div>



<?php include("../footer/footer.php"); ?>




</body>

</html>