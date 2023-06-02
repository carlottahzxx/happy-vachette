<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Granges - HV</title>
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
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>

<body>

    <header>
    <?php include("../header/header.php");
        require "../granges/grange_element.php";
        require "../../controller/server_grange.php";
        require "../../controller/server_capteur.php"

    ?> 


    </header>


    <h1>Granges</h1>
    <div>
        <a href="ajouter_grange.php"><button type="button">Ajouter</button></a>  
        
        <a href="supprimer_grange.php"><button type="button">Supprimer</button></a>  
    </div>

    <div class='grange-elem-wraper'>
        <?php
            $granges = grangesRequest($db,getUserId($db,$email));
            
            foreach($granges as $g){
                $value_co2 = getMeanCo2($db,$g['IdGrange']);
                $value_son = getMeanSon($db,$g['IdGrange']);
                $g_nom = $g['Nom'];
                echo("<a class='grange-elem' href='../colliers/colliers.php?grange=$g_nom'>");
                grangeElem($g['Nom'],$g['Lieu'],$value_co2,$value_son);
                echo('</a>');
            }
        ?>
    </div>

<?php include("../footer/footer.php"); ?>


</body>

</html>