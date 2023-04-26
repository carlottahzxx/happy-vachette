<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="../../../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>


<body>

    <?php include("../../header/header.php"); ?>
        
        

        <main>
            <h1>Boutique</h1>

            <div class="product-list">
                <?php require __DIR__ . '/produit.php';


                product("Collier","10.99$","collier_hv.png");

                product("Stylo","7.99$","stylo_hv.png");
                
                product("Bob Happy Vachette","15.99$","bob_hv.png");

                ?>
            </div>
        </main>

    <?php include("../../footer/footer.php"); ?>

</body>

</html>