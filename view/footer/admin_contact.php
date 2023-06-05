<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>HV - Contact</title>
    <link rel="stylesheet" href="../../css/header.css"/>
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="../../scripts/adminIns.js"></script>
    <script src="../../scripts/form.js"></script>
    <script src="../../scripts/customSubmit.js"></script>
    <script src="../../scripts/faq.js"></script>
</head>

<?php
    session_start();

    $connected = isset($_SESSION['email']);
?>

<body>

<?php 
    include("../header/header.php");
?> 

    <h1>Questions utilisateur</h1>


    <?php include("../footer/question_elem.php");?>


    <?php
    include("../footer/footer.php"); 
    
    ?>
</body>
</html>
