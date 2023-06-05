<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>HV - FAQ</title>
    <link rel="stylesheet" href="../../css/header.css"/>
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
    if($connected){
        $email = $_SESSION['email'];
    }

?>

<body>

<?php 
    include("../header/header.php");
    require_once "../../controller/server_faq.php";
?> 
<main>
    <h1>FAQ</h1>

    <?php
        $questions = requestFaqQuestions($db);
        foreach($questions as $q){
            $ques = $q['question'];
            $rep = $q['answer'];
            echo("
            <details class='faq-question'>
                <summary>$ques</summary>
                <p>$rep</p>
            </details>
            ");
        }

        if(count($questions)==0){
            echo("Cette catégorie ne contient aucune question pour le moment");
        }

    ?>
    

</div>
        <h2>D'autres questions ? Cliquez
            <?php 
                $admin=isAdmin($db,$email); 
                if($admin){
                    echo("
                    <a href='admin_contact.php'>ici</a> 
                    ");
                }else{
                    echo("
                    <a href='contact.php'>ici</a> 
                    ");
                }
            ?>
            
        </h2>

    </main>
    <?php include("../footer/footer.php"); ?>
</body>
</html>
