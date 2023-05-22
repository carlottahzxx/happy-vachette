<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Boutique - HV</title>
    <link rel="stylesheet" href="../../../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <script src="../../authentification/form.js"></script>
    <script src="../../authentification/customSubmit.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>


<body>

    <?php include("../../header/header.php"); ?>
        
        

        <main>
            <h1>Boutique</h1>

            <div class="product-list">
                <?php require __DIR__ . '/produit.php';


                product("Collier","10.99€","collier_hv.png");

                product("Capteur cardiaque","12.00€","capteur.png");
                
                product("Capteur CO2","12.00€","capteur.png");

                product("Capteur son","12.00€","capteur.png");
                
                product("Capteur température","12.00€","capteur.png");

                product("Produit test","100.00€","capteur.png");
                ?>
            </div>
        </main>

    <?php include("../../footer/footer.php"); ?>

</body>

</html>