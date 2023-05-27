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
    ?> 


    </header>


    <h1>Granges</h1>
    <div class='grange-elem-wraper'>
        <?php
            $granges = grangesRequest($db);
            foreach($granges as $g){
                $g_nom = $g['Nom'];
                echo("<a class='grange-elem' href='../colliers/colliers.php?grange=$g_nom'>");
                grangeElem($g['Nom'],$g['Lieu'],"Co2","Son");
                echo('</a>');
            }
        ?>
    </div>

<?php include("../footer/footer.php"); ?>


</body>

</html>