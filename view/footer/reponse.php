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

    require_once "../../controller/server_faq.php";

    $question_id  = 0;
    if(isset($_GET['id'])){
        $question_id = $_GET['id'];
    }
    
    $result = requestQuestion($db,$question_id);
    $question = $result['question'];
    $author = $result['author'];
?> 
    <div>
        <h2>Auteur : </h2>
        <?php echo("<p>$author</p>"); ?>
        <h2>Question : </h2>
        <?php echo("<p>$question</p>"); ?>
    </div>
    <h2>Réponse :</h2>
    <form class='reponse-faq' method='post'>
       
        <textarea class='rep-area' id="reponse" name="reponse" rows="5" cols="25"></textarea>
        <div class='checkbox-rep'>
            <input type='checkbox' name='add-faq' value='oui'>Ajouter à la faq</input>
        </div>

        <?php echo("<button type='submit' name='reponse-q' value=$question_id>Répondre</button>"); ?>
    </form>

    
<?php include("../footer/footer.php"); ?>
</body>
</html>
