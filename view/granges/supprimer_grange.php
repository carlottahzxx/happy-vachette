<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8"/>
    <title>Supprimer Grange - HV</title>
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


<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>

<body>

<?php include("../header/header.php");
    echo('
    </header>
    <h1>Supprimer une Grange</h1>
    ');

    require '../../controller/server_grange.php';
    

?> 
    <form method='post' id='suppr-grange-form'>
        <div class='supr-div'>
            <h3>Choisissez la grange à supprimer :</h3>
        
            <select class='grange-selector' name='selection-grange'>
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
            <button type='submit' name='supprimer-grange'>Supprimer</button>
       
        </div>
    </form>

    <?php include("../footer/footer.php") ?> 
</body>
</html>