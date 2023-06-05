<?php
    if(isset($_POST['enregistrer'])){
        $famille = $_POST['famille'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        
        $query = "UPDATE user SET mail='$email',familyName='$famille',firstName='$prenom' WHERE mail='$email'";
        mysqli_query($db, $query);
        $_SESSION['firstName'] = $prenom;
        $_SESSION['familyName'] = $famille;
        header('Location:mon_espace.php');
        exit;
    }


?>