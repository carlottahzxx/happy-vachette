<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../css/boutique.css" />
        <link rel="stylesheet" href="../../css/header.css" />
        <link rel="stylesheet" href="../../css/footer.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
        <script src="../../scripts/form.js"></script>
        <script src="../../scripts/customSubmit.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);

?>
    <body>

        <?php 
            $productName = $_GET['productName'];
            $price = $_GET['price'];;
            $image = $_GET['image'];
            $description = $_GET['description'];

            include("../header/header.php"); 
        ?>

        <div>
            <?php require __DIR__ . '/productDetail.php';
               
                product($productName,$price,$image,$description);
                
            ?>

        </div>

        <?php include("../footer/footer.php"); ?>
    </body> 


</html>