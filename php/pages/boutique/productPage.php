<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../../css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    </head>

    <body>

        <?php 
            $name = $_GET['name'];
            $price = $_GET['price'];;
            $image = $_GET['image'];
            $description = $_GET['description'];

            include("../../header/header.php"); 
        ?>

        <div>
            <?php require __DIR__ . '/productDetail.php';
               
                product($name,$price,$image,$description);
                
            ?>

        </div>

        <?php include("../../footer/footer.php"); ?>
    </body> 


</html>