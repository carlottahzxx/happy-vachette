<?php
    if(isset($_POST['ajout-grange'])){
        $nom = $_POST['nom-grange'];
        $lieu =$_POST['lieu-grange'];
       
        $query = "SELECT * FROM grange WHERE Nom='$nom'";
        $result = mysqli_query($db,$query);
        $in_base = mysqli_fetch_assoc($result);

        if($in_base){
            if($nom != '' && $lieu != ''){
                echo '<p class="p-error">Erreur Une grange avec ce nom existe deja</p>';
            }
        }else{
            $email = $_SESSION['email'];
            $query = "SELECT IdUser FROM user WHERE mail = '$email'";
            $result = mysqli_query($db,$query);
            $result = mysqli_fetch_assoc($result);
            $id_user = $result['IdUser'];

           

            $query = "INSERT INTO grange (Lieu,Nom,IdUser) VALUES ('$lieu','$nom','$id_user')";
            mysqli_query($db, $query);
            header("Location:grange.php");
            exit;

        }

    }


?>